<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_login_controller extends CI_Controller {

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
        $this->load->view('admin/admin_login_view');
    }

    
}
?>