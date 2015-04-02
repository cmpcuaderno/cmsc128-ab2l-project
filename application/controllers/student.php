<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Student extends CI_Controller {

		public function index(){
			$this->db->select('last_name, first_name, middle_name, student_number, classification, curriculum, contact_number, email_address, college_address, home_address');
			$this->db->from('student');
			$this->db->where('username', "student1");
			$this->db->where('password', "student1");
			$query = $this->db->get();
			$data['student'] = $query->result();
			
			$this->load->view('student_profile.php', $data);		
		}

		public function grades(){
			$this->load->view('grades');
		}
	}
?>