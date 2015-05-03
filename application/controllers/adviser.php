<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adviser extends CI_Controller{

	/**
	 * load the adviser model
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('adviser_model');
		$this->load->helper(array('form', 'url'));
	}

	public function index(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'adviser') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}

		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['adviser'] = $this->adviser_model->get_adviser($data['username']);

		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('adviser/profile.php', $data);
		$this->load->view('components/footer.php');
	}

	/**
	 * display adviser profile
	 */
	public function profile(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'adviser') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}

		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['adviser'] = $this->adviser_model->get_adviser($data['username']);

		$this->load->view('components/header.php');
		$this->load->view('adviser/profile', $data);
		$this->load->view('components/footer.php');
	}

	/**
	 * display adviser profile edit page
	 */
	public function edit(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'adviser') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}

		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['adviser'] = $this->adviser_model->get_adviser($data['username']);

		$this->load->view('components/header.php');
		$this->load->view('adviser/edit', $data);
		$this->load->view('components/footer.php');
	}

	/**
	 * update adviser details
	 * @param  string $en employee number of target adviser
	 */
	public function update($en){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'adviser') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}

		$this->load->helper('url');
		$this->adviser_model->update($en);

		/* redirect to adviser profile */
		redirect('adviser/profile');
	}

	/**
	 * get advisees with 'Graduate' classification
	 */
	public function grad_advisees(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'adviser') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}

		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['adviser'] = $this->adviser_model->get_adviser($data['username']);

		$data['grad_advisees'] = $this->adviser_model->get_grad_advisees($data['adviser']['employee_number']);

		$this->load->view('components/header.php');
		$this->load->view('adviser/grad_advisees', $data);
		$this->load->view('components/footer.php');
	}

	/**
	 * returns the advisee's profile
	 * @param  string $student_number student number of the advisee
	 */
	public function view_advisee($student_number = null) {
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'adviser') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}

		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['adviser'] = $this->adviser_model->get_adviser($data['username']);

		if(!isset($student_number)) {
			$data['error'] = array('error' => "No student number specified");
			$data['adviser'] = $this->adviser_model->get_adviser($data['username']);

			$this->load->view('components/header.php');
			$this->load->view('adviser/profile.php', $data);
			$this->load->view('components/footer.php');
		} else {
			$this->db->select('last_name, first_name, middle_name, student_number, classification, curriculum, contact_number, email_address, college_address, home_address');
			$data['student'] = $this->db->get_where('student', array('student_number' => $student_number))->row_array();

			if($data['student'] == null) {
				$data['error'] = array('error' => "Student not found!");
				$data['adviser'] = $this->adviser_model->get_adviser($data['username']);

				$this->load->view('components/header.php');
				$this->load->view('adviser/profile', $data);
				$this->load->view('components/footer.php');

			} else {
				$this->load->view('components/header.php');
				$this->load->view('adviser/student_profile', $data);
				$this->load->view('components/footer.php');
			}
		}
	}

	/**
	 * Upload adviser picture
	 */
	public function do_upload() {
		$this->check_session();
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['adviser'] = $this->adviser_model->get_adviser($data['username']);

		$config = array(
			'upload_path' => './uploads/',
			'allowed_types' => 'jpg|jpeg|png',
			'overwrite' => TRUE,
			'max_size' => "2048000",
			'max_height' => '200',
			'max_width' => '200',
			'maintain_ratio' => TRUE,
			'file_name' =>	$data['adviser']['employee_number']
			);
		$this->load->library('upload', $config);

		if($this->upload->do_upload()) {
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['adviser'] = $this->adviser_model->get_adviser($data['username']);
			$employee_number = $data['adviser']['employee_number'];

			$data = array('upload_photo' => $this->upload->data());

			$data = array(
				'picture' => 'uploads/' . $data['upload_photo']['file_name']
				);

			$this->db->where('employee_number', $employee_number);
			$this->db->update('adviser', $data);

			$data['error'] = array('error' => "Upload Successful!");

			$data['username'] = $session_data['username'];
			$data['adviser'] = $this->adviser_model->get_adviser($data['username']);

			$this->load->view('components/header.php');
			$this->load->view('adviser/profile.php', $data);
			$this->load->view('components/footer.php');
		} else {
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];

			$data['error'] = array('error' => $this->upload->display_errors());
			$data['adviser'] = $this->adviser_model->get_adviser($data['username']);

			$this->load->view('components/header.php');
			$this->load->view('adviser/profile.php', $data);
			$this->load->view('components/footer.php');
		}

	}

	/**
	 * List all advisees of an adviser
	 */
	public function advisees() {
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'adviser') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}

		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['adviser'] = $this->adviser_model->get_adviser($data['username']);
		$data['advisees'] = $this->adviser_model->get_advisees($data['adviser']['employee_number']);

		$this->load->view('components/header.php');
		$this->load->view('adviser/advisees', $data);
		$this->load->view('components/footer.php');
	}

	public function check_session(){
		if(!$this->session->userdata('logged_in')){
			//If no session, redirect to login page
			$this->load->helper('url');
			redirect('login', 'refresh');
		}
	}

	public function password_check($password) {
   			$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'adviser') {
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

	function validate_password(){
			$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'adviser') {
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

				$this->adviser_model->change_password($username_session, $password,$newpassword);
				$data['message'] = "Change password successful.";
				$this->load->view('components/header.php');
				$this->load->view('adviser/change_password', $data);
				$this->load->view('components/footer.php');
	        }
	        else{
	        	$data['message'] ="";
		        $this->load->view('components/header.php');
		        $this->load->view('adviser/change_password',$data);
		        $this->load->view('components/footer.php');
	        }
   		}
   	function change_password(){
			$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'adviser') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}

			$data['message'] = "";

			$this->load->view('components/header.php');
			$this->load->view('adviser/change_password', $data);
			$this->load->view('components/footer.php');

		}
}