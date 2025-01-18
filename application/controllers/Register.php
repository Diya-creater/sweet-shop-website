<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('security');
        $this->load->model('User');

    }

    public function index() {
        // Load the registration form view
        $this->load->view('registration_form');
    }

    public function register_user() {
 
        // Set validation rules
        $this->form_validation->set_rules('name', 'Full Name', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[1]');
        $this->form_validation->set_rules('confirmPass', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('gender', 'Gender', 'required|in_list[male,female]|xss_clean');
        //$this->form_validation->set_rules('dob', 'Date Of Birth', 'required|valid_date[m/d/Y]|xss_clean');
        $this->form_validation->set_rules('address', 'Address', 'required|alpha|min_length[2]|max_length[200]');
        // Run validation
        if ($this->form_validation->run() == FALSE) {

        // Validation failed, print errors
        //echo "Here are the validation errors: ";
            // echo validation_errors();  // This will print all validation error messages

                    // Validation failed, reload the form
            $this->load->view('registration_form');
        } else {
         

            $user=new User();
            // $user->name=$this->input->post('name'); 
            // $user->email=$this->input->post('email');
            $data = array(
                'full_name' => $this->input->post('name'),
                'email'      => $this->input->post('email'),
                'password'   => $this->input->post('password'),  // Hash the password\
                'gender'   => $this->input->post('gender'),
                'address'  => $this->input->post('address'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );

             $result=   $user->insert_entry($data);
                // print_r($user);
                // die;


            // Insert data into the users table
            if ($result) {
                $this->session->set_flashdata('register_success', 'You have registered successfully!');
                redirect(base_url('Register'));
            } else {
                $this->session->set_flashdata('register_fail', 'Registration failed. Please try again.');
                redirect(base_url('Register'));
            }
        //    redirect('login_view');
        }
    }
}
?>