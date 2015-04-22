<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index(){
		$this->check_session();
		
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
			
		$this->load->model('admin_model');
		$data['table'] = $this->admin_model->viewLogs();
			
		$this->load->helper('url');
		$this->load->view('components/header.php');
		$this->load->view('admin/admin_view', $data);
		$this->load->view('components/footer.php');	
	}

	public function register(){
		$this->check_session();
		
		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/admin_view');
		$this->load->view('components/footer.php');
		/* loads the admin_view.php file in views folder */
	}



	public function do_register(){
		$this->check_session();
		
		$adviser = $this->admin_model->add_adviser();
			
		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
			
		$action = $username . ' added ' . $adviser;
		
		$this->load->model('admin_model');
		$this->admin_model->createLog($username, $action);
			
		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/admin_view');
		$this->load->view('components/footer.php');
	}

	public function noOfGraduates(){
		$this->check_session();
		
		$result = $this->admin_model->noOfGraduates();

		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/no_of_graduates_view.php', $result);
		$this->load->view('components/footer.php');
	}
        
	public function delAdviser(){
		$this->check_session();
		
		$this->load->model('admin_model');
		$enum = $this->input->post('enum');
		$result = $this->admin_model->delAdviser($enum);
		
		$this->load->helper("url");
		$this->load->view('admin/adviser_delete_view.php', $enum); 
		$this->load->view('components/footer.php');
	}
	
	public function check_session(){
		if(!$this->session->userdata('logged_in')){
			//If no session, redirect to login page
			$this->load->helper('url');
			redirect('login', 'refresh');
		}
	}
}
