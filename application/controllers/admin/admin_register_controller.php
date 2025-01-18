<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_register_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the database, form validation, and helper
        $this->load->database('sweetshop');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('security');
    }

    public function index() {

        // Load the registration form view
        $this->load->view('admin/admin_register_view');
    }
    public function register(){
        $this->load->library('session');
        $this->user = new User;
        $result = $this->User->insert_entry($data);

        if ($result) {
            $this->session->set_flashdata('register_success', 'You have registered successfully!');
            redirect(base_url('admin_register_view'));
        } else {
            $this->session->set_flashdata('register_fail', 'Registration failed. Please try again.');
            redirect(base_url('admin_register_view'));
        }

    }
    public function insert() {

        // Set validation rules
        $this->form_validation->set_rules('name', 'Full Name', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[1]');
        $this->form_validation->set_rules('confirmPass', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('gender', 'Gender', 'required|in_list[male,female]|xss_clean');
        $this->form_validation->set_rules('address', 'Address', 'required|alpha|min_length[2]|max_length[200]');
    
        // Run validation
        if ($this->form_validation->run() == FALSE) {
    
            // // Validation failed, set flashdata to show errors on the form
            $this->session->set_flashdata('validation_errors', validation_errors());
    
            // // Reload the form view
            // $this->load->view('admin/admin_register_view');
            // $errors = $this->form_validation->error_array();
            // echo json_encode(['error' => true, 'errors' => $errors]);
            $this->load->view('admin/admin_register_view');

        } else {
            // Validation passed, process the data
    
            $user = new User();
    
            // Prepare the data to be inserted
            $data = array(
                'full_name' => $this->input->post('name'),
                'email'     => $this->input->post('email'),
                'password'  => $this->input->post('password'),  // Hash the password (for example)
                'gender'    => $this->input->post('gender'),
                'address'   => $this->input->post('address'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );
    
            // Insert data into the database
            $result = $user->insert_entry($data);
    
            // Check if the insertion was successful
            if ($result) {
                $this->session->set_flashdata('register_success', 'You have registered successfully!');
                redirect(base_url('Register'));
            } else {
                $this->session->set_flashdata('register_fail', 'Registration failed. Please try again.');
                redirect(base_url('Register'));
            }
        }
    }
    

    
}
?>