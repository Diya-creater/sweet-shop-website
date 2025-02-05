<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class  frontend_product_controller extends CI_Controller {  
  
    public function index($category_id)  
    {  

        $this->load->library('session');
        $this->load->model('Product'); // Make sure session is loaded
        // $this->categories = new Categories;
        // $data['categories'] = $this->categories->get_categories();

        $category_id=$category_id;
         $this->product = new Product;
        $data['products'] = $this->product->get_product_of_category($category_id);

       $this->load->view('frontend/frontend_product_view',$data);
    }  
  
    public function product()  
    {  
        // $this->load->view('login_view');  
    }  

}
  
    