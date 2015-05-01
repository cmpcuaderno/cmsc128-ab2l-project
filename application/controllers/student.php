<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Student extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->model('student_model','',TRUE);
			$this->load->helper("url");
		}

		public function index(){
			$this->check_session();
			
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$username = $session_data['username'];
			$password = $session_data['password'];
            
			$this->load->helper('form');
			$this->db->select('username, password,last_name, first_name, middle_name, student_number, classification, curriculum, contact_number, email_address, college_address, home_address');
			$this->db->from('student');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$query = $this->db->get();
			$data['student'] = $query->result();

			$this->load->helper('url');
			$this->load->view('components/header.php');
			$this->load->view('student/student_profile', $data);
			$this->load->view('components/footer.php');
		}

		public function grades(){
			$this->check_session();

			$this->load->view('components/header.php');
			$this->load->view('student/student_grades');
			$this->load->view('components/footer.php');
		}

		function update(){
			$this->check_session();

			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$username = $session_data['username'];
			$password = $session_data['password'];
			
			$this->load->helper('form');
			$this->db->select('username, password,last_name, first_name, middle_name, student_number, classification, curriculum, contact_number, email_address, college_address, home_address');
			$this->db->from('student');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$query = $this->db->get();
			$data['student'] = $query->result();
			$this->load->view('components/header.php');
			$this->load->view('student/student_update', $data);
			$this->load->view('components/footer.php');
		}

		function update_student() {
			$this->check_session();
			
			$username= $this->input->post('username');
			$password= $this->input->post('password');
			$data = array(
				'last_name' => $this->input->post('last_name'),
				'first_name' => $this->input->post('first_name'),
				'middle_name' => $this->input->post('middle_name'),
				'student_number' => $this->input->post('student_number'),
				'classification' => $this->input->post('classification'),
				'curriculum' => $this->input->post('curriculum'),
				'contact_number' => $this->input->post('contact_number'),
				'email_address' => $this->input->post('email_address'),
				'college_address' => $this->input->post('college_address'),
				'home_address' => $this->input->post('home_address')
			);
			$this->student_model->update_student($username,$password,$data);
			$this->load->view('components/header.php');
			$this->load->view('student/update_success');
			$this->load->view('components/footer.php');
		}

		function validate_student(){
			$this->check_session();

			$this->load->library('form_validation');
	        $this->form_validation->set_rules('email_address', 'Email Address', 'required|trim|valid_email');
	        $this->form_validation->set_rules('contact_number', 'Contact Number', 'required|trim|min_length[11]|max_length[13]');
	        if ($this->form_validation->run() == TRUE){
	       		 $this->update_student();
	       	}else{
	       		$this->update();
	       	}
		}

		function change(){
			$this->check_session();

			$this->load->helper(array('form'));
			$this->load->view('components/header.php');
			$this->load->view('student/student_change_password');
			$this->load->view('components/footer.php');

		}

		function search(){
			$this->check_session();

			$this->load->helper(array('form'));
			$this->load->view('components/header.php');
			$this->load->view('student/search');
			$this->load->view('components/footer.php');
		}

		function search_keyword(){
			$this->check_session();
			$adviser = $this->input->post('keyword');
			$type = $this->input->post('search_type');

			//Pagination Variables
			$total=100;
		    $per_pg=10;
		    $offset=$this->uri->segment(3);
		    $this->load->library('pagination');
		    $config['base_url'] = 'http://127.0.0.1/studentadvisersystem/index.php/student/search';
		    $config['total_rows'] = $total;
		    $config['per_page'] = $per_pg;
		    $config['full_tag_open'] = '<div id="pagination">';
		    $config['full_tag_close'] = '</div>';
		    
		    //Pagination Initilization
		    $this->pagination->initialize($config);
		    $data['pagination']=$this->pagination->create_links();

		    //Searching the keyword from the database
			$data['query']= $this->student_model->search_database($adviser,$type,$per_pg,$offset);

			//$data['query']= $this->student_model->search_database($adviser,$type);
			$this->load->view('components/header.php');
			$this->load->view('student/search_result',$data);	
			$this->load->view('components/footer.php');

		}
			
		function validate_password(){
			$this->check_session();

			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$username1 = $session_data['username'];
			$password1 = $session_data['password'];

	        $this->load->library('form_validation');
	        $this->form_validation->set_rules('opword', 'current password', 'required|trim');
	        $this->form_validation->set_rules('npword1', 'new password', 'required|trim|min_length[6]');
	        $this->form_validation->set_rules('npword2', 'retype password', 'required|matches[npword1]|trim|min_length[6]');    
	        $this->form_validation->set_message('matches', 'Password did not match.');
	   
	        if ($this->form_validation->run() == TRUE){
	           $newpassword = sha1($this->input->post('npword2'));
	           $password = sha1($this->input->post('opword'));

	           if(strcmp($password, $password1)==0){
	               $this->student_model->change_password($password,$newpassword);
	               $this->load->view('components/header.php');
	               $this->load->view('student/change_password_success');
	               $this->load->view('components/footer.php'); 
	           }
	           else{
	                echo "The current password you entered is invalid.";
	           }
	        }
	        else{
		        $this->load->view('components/header.php');
		        $this->load->view('student/student_change_password');
		        $this->load->view('components/footer.php'); 
	        } 
   		}
    
		public function check_session(){
		if(!$this->session->userdata('logged_in')){
			//If no session, redirect to login page
			$this->load->helper('url');
			redirect('login', 'refresh');
		}
		}
	}
?>