<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class admin_product_controller extends CI_Controller
{
    public function __construct()
    {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('Product');
    $this->load->model('Categories');
    }

    public function index()
    {

        $this->load->library('session'); // Make sure session is loaded
        $this->categories = new Categories;
        $data['categories'] = $this->categories->get_categories();
    //     print_r($id);
    //     die;
    //     $category_id=$id;
    //    $this->load->library('session'); // Make sure session is loaded
       $this->product = new Product;
        $data['product'] = $this->product->get_products();

       $this->load->view('admin/admin_product_new',$data);
    }
    public function get_products_list()
    {
        
    
    }

    public function add(){

        $this->load->library('session'); // Make sure session is loaded
        $this->product = new Product;

        $data['name']=$_POST['name'];
        $data['file']=$_FILES['file'];
        $data['weight_in_grams']=$_POST['weight_in_grams'];
        $data['packaging_type']=$_POST['packaging_type'];
        $data['packaging_quantity']=$_POST['packaging_quantity'];
        $data['price']=$_POST['price'];
        $data['category_id']=$_POST['category_id'];

            $result = $this->product->insert_entry($data);
   
            if ($result) {
                $this->session->set_flashdata('success', 'You have registered successfully!');
                redirect(base_url('admin_product'));
            } else {
                $this->session->set_flashdata('fail', 'Registration failed. Please try again.');
                redirect(base_url('admin_product'));
            }

    }

    }
   

    

?>