<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Student extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->model('student_model','',TRUE);
			$this->load->helper(array('url','form'));
		}

		/*
			default view
			student profile
		*/
		public function index(){
			$this->check_session();

			$role = $this->session->userdata('table');
			if($role != 'student') {
				$this->load->view('components/header.php');
				$this->load->view('restricted.php');
				$this->load->view('components/footer.php');

				return;
			}

			$session_data = $this->session->userdata('logged_in');

			$data['student'] = $this->student_model->search_student($session_data['username'],$session_data['password']);

			$this->load->view('components/header.php');
			$this->load->view('student/student_profile', $data);
			$this->load->view('components/footer.php');
		}

		/*
			view student's grades
		*/
		public function grades(){
			$this->check_session();

			$role = $this->session->userdata('table');
			if($role != 'student') {
				$this->load->view('components/header.php');
				$this->load->view('restricted.php');
				$this->load->view('components/footer.php');

				return;
			}

			$session_data = $this->session->userdata('logged_in');

			$student_number = $this->student_model->get_student_number($session_data['username'],$session_data['password']);
			$data['grades'] = $this->student_model->fetch_student_grades($student_number);

			$this->load->view('components/header.php');
			$this->load->view('student/student_grades', $data);
			$this->load->view('components/footer.php');
		}

		/*
			view update student profile
		*/
		function update(){
			$this->check_session();

			$role = $this->session->userdata('table');
			if($role != 'student') {
				$this->load->view('components/header.php');
				$this->load->view('restricted.php');
				$this->load->view('components/footer.php');

				return;
			}

			$session_data = $this->session->userdata('logged_in');

			$data['student'] = $this->student_model->search_student($session_data['username'],$session_data['password']);
			$data['message']="";

			$this->load->view('components/header.php');
			$this->load->view('student/student_update', $data);
			$this->load->view('components/footer.php');
		}

		/*
			update/edit student profile
		*/
		function update_student() {
			$this->check_session();

			$role = $this->session->userdata('table');
			if($role != 'student') {
				$this->load->view('components/header.php');
				$this->load->view('restricted.php');
				$this->load->view('components/footer.php');

				return;
			}

			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];

			$data = array(
				'contact_number' => $this->input->post('contact_number'),
				'email_address' => $this->input->post('email_address'),
				'college_address' => $this->input->post('college_address'),
				'home_address' => $this->input->post('home_address')
			);

			$this->student_model->update_student($username,$password,$data);

			$data['student'] = $this->student_model->search_student($username, $password);
			$data['message']="Update student profile successful.";

			$this->load->view('components/header.php');
			$this->load->view('student/student_update',$data);
			$this->load->view('components/footer.php');
		}

		/*
			validation rules for update/edit student profile
		*/
		function validate_student(){
			$this->load->library('form_validation');
	        $this->form_validation->set_rules('contact_number', 'Contact Number', 'required|trim|is_numeric|exact_length[11]');
	        $this->form_validation->set_rules('email_address', 'Email Address', 'required|trim|min_length[6]|valid_email');
	        $this->form_validation->set_rules('home_address', 'Home Address', 'required|trim|min_length[6]');
			$this->form_validation->set_rules('college_address', 'College Address', 'required|trim|min_length[6]');
	        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');


	    	if ($this->form_validation->run() == TRUE){
				$this->update_student();
			}
			else{
				$this->update();
			}

		}

		/*
			view change password
		*/
		function change(){
			$this->check_session();

			$role = $this->session->userdata('table');
			if($role != 'student') {
				$this->load->view('components/header.php');
				$this->load->view('restricted.php');
				$this->load->view('components/footer.php');

				return;
			}

			$data['message'] = "";

			$this->load->view('components/header.php');
			$this->load->view('student/student_change_password', $data);
			$this->load->view('components/footer.php');

		}

		/*
			validation rules for change password
		*/
		function validate_password(){
			$this->check_session();

			$role = $this->session->userdata('table');
			if($role != 'student') {
				$this->load->view('components/header.php');
				$this->load->view('restricted.php');
				$this->load->view('components/footer.php');

				return;
			}

			$session_data = $this->session->userdata('logged_in');
			$username_session = $session_data['username'];
			$password_session = $session_data['password'];

	        $this->load->library('form_validation');
	        $this->form_validation->set_rules('opword', 'current password', 'required|trim|callback_password_check');
	        $this->form_validation->set_rules('npword1', 'new password', 'required|trim|min_length[6]');
	        $this->form_validation->set_rules('npword2', 'retype password', 'required|matches[npword1]|trim|min_length[6]');
	        $this->form_validation->set_message('matches', 'Password did not match.');
	        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

	        if ($this->form_validation->run() == TRUE){
				$newpassword = sha1($this->input->post('npword2'));
				$password = sha1($this->input->post('opword'));

				$this->student_model->change_password($username_session, $password,$newpassword);
				$data['message'] = "Change password successful.";
				$this->load->view('components/header.php');
				$this->load->view('student/student_change_password', $data);
				$this->load->view('components/footer.php');
	        }
	        else{
	        	$data['message'] ="";
		        $this->load->view('components/header.php');
		        $this->load->view('student/student_change_password',$data);
		        $this->load->view('components/footer.php');
	        }
   		}

   		/*
			check if input password is same as student's password
   		*/
   		public function password_check($password) {
   			$this->check_session();

			$role = $this->session->userdata('table');
			if($role != 'student') {
				$this->load->view('components/header.php');
				$this->load->view('restricted.php');
				$this->load->view('components/footer.php');

				return;
			}

			$session_data = $this->session->userdata('logged_in');
			$password_session = $session_data['password'];

			if (sha1($password) == $password_session) {
				return TRUE;
			}
			else {
				$this->form_validation->set_message('password_check', 'The current password you entered is invalid.');
				return FALSE;
			}
		}

    	/*
			view all advisers
    	*/
		function adviser(){
			$this->check_session();

			$role = $this->session->userdata('table');
			if($role != 'student') {
				$this->load->view('components/header.php');
				$this->load->view('restricted.php');
				$this->load->view('components/footer.php');

				return;
			}

			$data['query']= $this->student_model->view_all_advisers();

			$this->load->view('components/header.php');
			$this->load->view('student/student_adviser',$data);
			$this->load->view('components/footer.php');
		}

		/*
			view student's adviser
		*/
		function student_adviser(){
   			$this->check_session();

			$role = $this->session->userdata('table');
			if($role != 'student') {
				$this->load->view('components/header.php');
				$this->load->view('restricted.php');
				$this->load->view('components/footer.php');

				return;
			}

			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$data['query']= $this->student_model->view_adviser($username);
			$this->load->view('components/header.php');
			$this->load->view('student/student_view_adviser',$data);
			$this->load->view('components/footer.php');
   		}

   		/*
			check session details
   		*/
		public function check_session(){
			if(!$this->session->userdata('logged_in')){
				//If no session, redirect to login page
				$this->load->helper('url');
				redirect('login', 'refresh');
			}
		}
	}
?>