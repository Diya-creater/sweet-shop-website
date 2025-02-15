<?php
class Slider extends CI_Model{



    public function get_sliders(){

    //     if(!empty($this->input->get("search"))){

    //       $this->db->like('title', $this->input->get("search"));

    //       $this->db->or_like('description', $this->input->get("search")); 

    //     }

        $query = $this->db->get("sliders");

        return $query->result();

    }


    public function insert_entry()
    {
        // Load the Upload library
        $config['upload_path']   = 'public/uploads/sliders'; // Path to save uploaded files
        $config['allowed_types'] = '*'; // Allowed file types
        $config['max_size']      = 1024; // Maximum file size in KB (1 GB)
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
            'file'  => $file_name // Store the file name/path in the database
        ];
    
        // Insert data into the database
        $insert_status = $this->db->insert('sliders', $data);
    
        if ($insert_status) {
            return ['status' => true, 'insert_id' => $this->db->insert_id()]; // Return success and record ID
        } else {
            return ['status' => false, 'error' => 'Failed to insert record.']; // Return error message
        }
    }
    
    public function get_slider_by_id($id)
    {
        return $this->db->get_where('sliders', ['id' => $id])->row();
    }

    public function update_entry($id, $data)
    {
        $this->db->where('id', $id);
        $updateData=[];
            // print_r($data['file']['name']);die;
        if(!empty($data['file']['name'])){
            $config['upload_path']   = 'public/uploads/sliders';
            $config['allowed_types'] = '*';
            $config['encrypt_name']  = true;
            $this->load->library('upload', $config);
            $upload_status = null;
            if (!$this->upload->do_upload('file')) {
                $upload_status = $this->upload->display_errors();
                return ['status' => false, 'error' => $upload_status];
            } else {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
                $updateData['file']=$file_name;
            }
        }

       
        $updateData['name']=$data['name'];

        return $this->db->update('sliders', $updateData);
    }

    public function delete_entry($id)
    {
        return $this->db->delete('sliders', ['id' => $id]);
    }


}