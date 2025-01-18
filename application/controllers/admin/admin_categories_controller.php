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

       $this->load->view('admin/admin_categories',$data);
    }
    public function get_categories_list()
    {
        
    
    }

    public function add(){

        $this->load->library('session'); // Make sure session is loaded
        $this->categories = new Categories;

        $data['name']=$_POST['name'];
        $data['file']=$_FILES['file'];

            $result = $this->categories->insert_entry($data);
   
            if ($result) {
                $this->session->set_flashdata('success', 'You have registered successfully!');
                redirect(base_url('admin_categories'));
            } else {
                $this->session->set_flashdata('fail', 'Registration failed. Please try again.');
                redirect(base_url('admin_categories'));
            }

    }

    }
   

    

?>