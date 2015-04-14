<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Student extends CI_Controller {

		/**
		 * Temporarily used to retrieve student data
		 * Will be removed once student log in is implemented
		 */
		public $username = 'student1';
		public $password = 'student1';

		function __construct(){
			parent::__construct();
			$this->load->model('student_model','',TRUE);
			$this->load->helper("url");
		}

		public function index(){
			$this->db->select('last_name, first_name, middle_name, student_number, classification, curriculum, contact_number, email_address, college_address, home_address');
			$this->db->from('student');
			$this->db->where('username', "student1");
			$this->db->where('password', "student1");
			$query = $this->db->get();
			$data['student'] = $query->result();

			$this->load->view('components/header.php');
			$this->load->view('student/student_profile', $data);
			$this->load->view('components/footer.php');
		}

		public function grades(){
			$this->load->view('components/header.php');
			$this->load->view('student/student_grades');
			$this->load->view('components/footer.php');
		}

		function update(){
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
	        $this->load->helper(array('form'));
			$this->load->view('components/header.php');
	        $this->load->view('student/search');
			$this->load->view('components/footer.php');
		}

		function search_keyword(){
			$adviser = $this->input->post('keyword');

			$data['query']= $this->student_model->search_database($adviser);
			$this->load->view('components/header.php');
			$this->load->view('student/search_result',$data);
			$this->load->view('components/footer.php');  
    	}
	}
?>