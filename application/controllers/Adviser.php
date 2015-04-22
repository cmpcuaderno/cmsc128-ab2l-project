<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adviser extends CI_Controller{
    
    public function index(){
        $this->load->view('adviser-register-view');
    }

    public function register(){
        $this->load->view('adviser-register-view');//loads the adviser-register-view.php file in views folder
    }

    public function __construct(){
        parent::__construct();
        $this->load->model('Adviser_model');
    }
    
    public function do_register(){
        //$_POST["register"];
        
//         if($this->input->post('register')){
//             
//             $this->load->model('Adviser_model');//loads the Adviser_model.php file in models folder
// 
//             if($this->Adviser_model->add_adviser()){
//                 echo "Hi ".$this->input->post('first_name')." Registred successfully" ;
//             
//             }else{
//                 echo "Registration failed";
//             }
//         }
    
        $this->Adviser_model->add_adviser();
    }
}