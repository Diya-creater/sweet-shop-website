<?php
class Subcategory extends CI_Model{



    public function get_subcategories(){

    //     if(!empty($this->input->get("search"))){

    //       $this->db->like('title', $this->input->get("search"));

    //       $this->db->or_like('description', $this->input->get("search")); 

    //     }

        $query = $this->db->get("subcategories");

        return $query->result();

    }


    public function insert_entry()
    {
        // // Load the Upload library
        // $config['upload_path']   = 'public/uploads/categories'; // Path to save uploaded files
        // $config['allowed_types'] = '*'; // Allowed file types
        // // $config['max_size']      = 1024; // Maximum file size in KB (1 GB)
        // $config['encrypt_name']  = true; // Encrypt file names to avoid conflicts
    
        // $this->load->library('upload', $config);
    
        // // Initialize response data
        // $upload_status = null;
    
        // if (!$this->upload->do_upload('file')) {
        //     // Handle upload error
        //     $upload_status = $this->upload->display_errors();
        //     return ['status' => false, 'error' => $upload_status]; // Return error details
        // } else {
        //     // Handle successful upload
        //     $upload_data = $this->upload->data();
        //     $file_name = $upload_data['file_name']; // Get the uploaded file name
        // }
    
        // Gather other form input data
        $data = [
            'name' => $this->input->post('name', true),
            'category_id'=>$this->input->post('category_id', true) // Store the file name/path in the database
        ];
    
        // Insert data into the database
        $insert_status = $this->db->insert('subcategories', $data);
    
        if ($insert_status) {
            return ['status' => true, 'insert_id' => $this->db->insert_id()]; // Return success and record ID
        } else {
            return ['status' => false, 'error' => 'Failed to insert record.']; // Return error message
        }
    }
    
}