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
			
			$this->load->helper('form');
			$this->db->select('username, password,last_name, first_name, middle_name, student_number, classification, curriculum, contact_number, email_address, college_address, home_address');
			$this->db->from('student');
			$this->db->where('username', "student1");
			$this->db->where('password', "student1");
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

			$data['query']= $this->student_model->search_database($adviser);
			$this->load->view('components/header.php');
			$this->load->view('student/search_result',$data);
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
?>