<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class admin_categories_controller extends CI_Controller
{
    public function __construct()
    {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('Categories');
    }

    public function index()
    {

       $this->load->library('session'); // Make sure session is loaded
       $this->categories = new Categories;
       $data['categories'] = $this->categories->get_categories();

       $this->load->view('admin/admin_categories_new',$data);
    }
    public function get_categories_list()
    {
        
    
    }

    public function add(){

        $this->load->library('session'); // Make sure session is loaded
        $this->categories = new Categories;

        $data['name']=$_POST['name'];
        $data['file']=$_FILES['file'];
        $data['is_250gm']=$_POST['is_250gm'];
        $data['is_500gm']=$_POST['is_500gm'];
        $data['is_1000gm']=$_POST['is_1000gm'];

            $result = $this->categories->insert_entry($data);
   
            if ($result) {
                $this->session->set_flashdata('success', 'You have registered successfully!');
                redirect(base_url('admin_categories'));
            } else {
                $this->session->set_flashdata('fail', 'Registration failed. Please try again.');
                redirect(base_url('admin_categories'));
            }
            redirect('admin_product_controller/index');

    }

    public function delete($id)
{

       $this->load->library('session'); // Make sure session is loaded
        $this->categories = new Categories;

    $result = $this->categories->delete_entry($id);
    
    if ($result) {
        $this->session->set_flashdata('delete_success', 'category item deleted successfully.');
    } else {
        $this->session->set_flashdata('delete_fail', 'Failed to delete slider item.');
    }

    redirect(base_url('admin_categories'));
}

// Load the edit form
public function edit($id)
{
    $data['categories'] = $this->Categories->get_category_by_id($id);
    $this->load->view('admin/edit_category_view', $data);
}

// Update category item
public function update()
{
    $id = $this->input->post('id');
    $name = $this->input->post('name');
    $update_data = ['name' => $name];
    // $is_250gm = $this->input->post('is_250gm');
    // $update_data = ['is_250gm' => $is_250gm];
    // $is_500gm = $this->input->post('is_500gm');
    // $update_data = ['is_500gm' => $is_500gm];
    // $is_1000gm = $this->input->post('is_1000gm');
    // $update_data = ['is_1000gm' => $is_1000gm];

    if(isset($_FILES['file'])){
        $update_data['file']=$_FILES['file'];
    }

    $upload_result = $this->Categories->update_entry($id,$update_data);
    
    if ($upload_result) {
    
        $this->session->set_flashdata('update_success', 'categories item updated successfully.');
    } else {
        $this->session->set_flashdata('update_fail', 'Failed to update item.');
    }
    redirect(base_url('admin_categories'));
    
    }

    }
   

    

?>