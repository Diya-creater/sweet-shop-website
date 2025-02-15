<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class admin_sliders extends CI_Controller
{
    public function __construct()
    {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('Slider');
    }

    public function index()
    {

       $this->load->library('session'); // Make sure session is loaded
       $this->slider = new Slider;
       $data['sliders'] = $this->Slider->get_sliders();

       $this->load->view('admin/admin_sliders_new',$data);
    }
    public function get_slider_list()
    {
        
    
    }

    public function add(){

       

        $this->load->library('session'); // Make sure session is loaded
        $this->sliders = new Slider;


        $data['file']=$_FILES['file'];
        $data['name']=$_POST['name'];

            $result = $this->sliders->insert_entry($data);

            if ($result) {
                $this->session->set_flashdata('success', 'You have registered successfully!');
                redirect(base_url('admin_sliders'));
            } else {
                $this->session->set_flashdata('fail', 'Registration failed. Please try again.');
                redirect(base_url('admin_sliders'));
            }

    }

// Function to delete a slider item
public function delete($id)
{

       $this->load->library('session'); // Make sure session is loaded
        $this->sliders = new Slider;

    $result = $this->sliders->delete_entry($id);
    
    if ($result) {
        $this->session->set_flashdata('delete_success', 'Slider item deleted successfully.');
    } else {
        $this->session->set_flashdata('delete_fail', 'Failed to delete slider item.');
    }

    redirect(base_url('admin_sliders'));
}

// Load the edit form
public function edit($id)
{
    $data['sliders'] = $this->Slider->get_slider_by_id($id);
    $this->load->view('admin/edit_slider_view', $data);
}

// Update slider item
public function update()
{
    $id = $this->input->post('id');
    $name = $this->input->post('name');
    $update_data = ['name' => $name];

    if(isset($_FILES['file'])){
        $update_data['file']=$_FILES['file'];
    }

    $upload_result = $this->Slider->update_entry($id,$update_data);
    
    if ($upload_result) {
    
        $this->session->set_flashdata('update_success', 'Sliders item updated successfully.');
    } else {
        $this->session->set_flashdata('update_fail', 'Failed to update item.');
    }
    redirect(base_url('admin_sliders'));
    
    }


    }
   

    

?>