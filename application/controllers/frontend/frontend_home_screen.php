<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class frontend_home_screen extends CI_Controller {  
  
    public function index()  
    {  

        $this->load->model('Categories');
        $this->categories = new Categories;
        $data['categories'] = $this->categories->get_categories();
 


        $this->load->model('Slider');
        $this->sliders = new Slider;
        $data['sliders'] = $this->sliders->get_sliders();

        $this->load->view('frontend/home_screen',$data);  
    }  

}  
?>
  