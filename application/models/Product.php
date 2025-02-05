<?php
class Product extends CI_Model{



    public function get_products(){

    //     if(!empty($this->input->get("search"))){

    //       $this->db->like('title', $this->input->get("search"));

    //       $this->db->or_like('description', $this->input->get("search")); 

    //     }

        $query = $this->db->get("products");

        return $query->result();

    }


    public function get_product_of_category($category_id){

        //     if(!empty($this->input->get("search"))){
    
        //       $this->db->like('title', $this->input->get("search"));
    
        //       $this->db->or_like('description', $this->input->get("search")); 
    
        //     }
    
            $query = $this->db->where('category_id',$category_id)->get("products");
    
            return $query->result();
    
        }
    
    
    public function insert_entry()
    {
        // Load the Upload library
        $config['upload_path']   = 'public/uploads/products'; // Path to save uploaded files
        $config['allowed_types'] = '*'; // Allowed file types
        // $config['max_size']      = 1024; // Maximum file size in KB (1 GB)
        $config['encrypt_name']  = true; // Encrypt file names to avoid conflicts
    
        $this->load->library('upload', $config);
    
        // Initialize response data
        $upload_status = null;
    
        if (!$this->upload->do_upload('file')) {
            // Handle upload error
            $upload_status = $this->upload->display_errors();
            return ['status' => false, 'error' => $upload_status]; // Return error details
        } else {
            // Handle successful upload
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name']; // Get the uploaded file name
        }
    
        // Gather other form input data
        $data = [
            'name' => $this->input->post('name', true),
            'file'  => $file_name, // Store the file name/path in the database
            'weight_in_grams'=> $this->input->post('weight_in_grams'),
            'packaging_type'=> $this->input->post('packaging_type'),
            'packaging_quantity'=> $this->input->post('packaging_quantity'),
            'category_id'=>$this->input->post('category_id'),
            'price'=> $this->input->post('price')
        ];
    
        // Insert data into the database
        $insert_status = $this->db->insert('products', $data);
    
        if ($insert_status) {
            return ['status' => true, 'insert_id' => $this->db->insert_id()]; // Return success and record ID
        } else {
            return ['status' => false, 'error' => 'Failed to insert record.']; // Return error message
        }
    }
    
}