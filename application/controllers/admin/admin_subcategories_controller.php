<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class admin_subcategories_controller extends CI_Controller
{
    public function __construct()
    {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('Subcategory');
    $this->load->model('Categories');

    }

    public function index()
    {

       $this->load->library('session'); // Make sure session is loaded
       $this->subcategory = new Subcategory;
       $data['subcategories'] = $this->subcategory->get_subcategories();
       $this->categories = new Categories;
       $data['categories'] = $this->categories->get_categories();



        $this->load->view('frontend/frontend_navbar', $data);
    }

        $this->load->view('admin/admin_subcategories_view',$data);

    }
    


    
    public function get_subcategories_list()
    {
                    
    }

    public function add(){

       

        $this->load->library('session'); // Make sure session is loaded
        $this->subcategories = new Subcategory;

        $data['name']=$_POST['name'];
        $data['category_id']=$_POST['category_id'];

            $result = $this->subcategories->insert_entry($data);

            if ($result) {
                $this->session->set_flashdata('success', 'You have registered successfully!');
                redirect(base_url('admin_subcategories'));
            } else {
                $this->session->set_flashdata('fail', 'Registration failed. Please try again.');
                redirect(base_url('admin_subcategories'));
            }

    }

    }
   

    

?>