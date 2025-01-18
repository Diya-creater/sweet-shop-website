<?php



class User extends CI_Model{



    // public function get_itemCRUD(){

    //     if(!empty($this->input->get("search"))){

    //       $this->db->like('title', $this->input->get("search"));

    //       $this->db->or_like('description', $this->input->get("search")); 

    //     }

    //     $query = $this->db->get("items");

    //     return $query->result();

    // }



    public function insert_entry()

    {    
        $this->full_name    = $_POST['name']; // please read the below note
        $this->email  = $_POST['email'];
        $this->password  = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $this->gender  = $_POST['gender'];
        $this->address  = $_POST['address'];
        $this->created_at  =  date('Y-m-d H:i:s');
        $this->updated_at  =  date('Y-m-d H:i:s');


        $this->db->insert('users', $this);

        $insert_status = $this->db->insert('users', $this);

        if ($insert_status) {
            return $this->db->insert_id(); // Returns the inserted record ID
        } else {
            return false; // Return false if the insertion failed
        }
     
    }

}