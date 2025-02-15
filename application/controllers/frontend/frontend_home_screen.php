<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  





class frontend_home_screen extends CI_Controller {  

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Categories');  // Load Category model
        $this->load->model('Subcategory');  // Load Subcategory model
    }

    public function index()  
    {  

      
        $this->categories = new Categories;
   




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
                    'file' => $row->file,

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

        // // Fetch the result as an array
        // $categories = $query->result_array();

        // // Fetch the result as an array
        // $categories = $query->result_array();

        // Passing data to view
        // $data['categories'] = $this->categories->get_categories();
        $this->load->model('Slider');
        $this->sliders = new Slider;
        $data['sliders'] = $this->sliders->get_sliders();

        $this->load->view('frontend/home_screen',$data);  
    }  

}  
?>
  