<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class  frontend_product_controller extends CI_Controller {  
  
    public function index($category_id)  
    {  

        $this->load->library('session');
        $this->load->model('Product'); // Make sure session is loaded
        $this->product = new Product;
        $data['products'] = $this->product->get_product_of_category($category_id);

         $this->db->select('categories.*, subcategories.name AS subcategory_name');
         $this->db->from('categories');
         $this->db->join('subcategories', 'subcategories.category_id = categories.id', 'left');
         $query = $this->db->get();
         $categories = $query->result(); // This returns an array of objects
         
         $categoryData = []; // Initialize an array to store the categories and subcategories
         
         foreach ($categories as $row) {
             // Check if the category already exists in the array
             if (!isset($categoryData[$row->id])) {
                 $categoryData[$row->id] = [
                     'id' => $row->id,
                     'name' => $row->name,
                     'subcategories' => [] // Initialize an empty array for subcategories
                 ];
             }
         
             // Add the subcategory to the category's subcategories array
             if ($row->subcategory_name) {
                 $categoryData[$row->id]['subcategories'][] = [
                     'id' => $row->id, 
                     'name' => $row->subcategory_name
                 ];
             }
         }
         
         $data['categories'] = $categoryData; // Now this contains the structured categories with subcategories
        
        $this->load->view('frontend/frontend_product_view',$data);
    }  
  
    public function product()  
    {  
        // $this->load->view('login_view');  
    }  

}
  
    