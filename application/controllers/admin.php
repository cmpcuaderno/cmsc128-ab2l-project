<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{
    
    public function index(){
		$this->load->helper("url");
		$this->load->view('components/header.php');
        $this->load->view('admin/admin_view');
		$this->load->view('components/footer.php');	
    }

    public function register(){
		$this->load->helper("url");
		$this->load->view('components/header.php');
        $this->load->view('admin/admin_view');
		$this->load->view('components/footer.php');
        /* loads the admin_view.php file in views folder */
    }

    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
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
    
        $this->admin_model->add_adviser();
		$this->load->helper("url");
		$this->load->view('components/header.php');
        $this->load->view('admin/admin_view');
		$this->load->view('components/footer.php');
    }
    
    public function noOfGraduates(){
                $this->load->helper("url");
		$this->db->select('student_number');
		$this->db->from('student');
		$this->db->where('classification', "graduate");
		$query = $this->db->get();
		$data['student'] = $query->result();
		$this->load->view('components/header.php');
		$this->load->view('student/no_of_graduates_view.php', $data);	
		$this->load->view('components/footer.php');			
        }
}