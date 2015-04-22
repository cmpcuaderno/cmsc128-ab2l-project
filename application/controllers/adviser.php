<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adviser extends CI_Controller{
	/**
	 * temporary. will be removed once log in is implemented
	 */
	private $en = '1234-0000001';

	/**
	 * load the adviser model
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('adviser_model');
	}

	public function index(){
		$this->check_session();
		
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['adviser'] = $this->adviser_model->get_adviser($this->en);

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
		
		$data['adviser'] = $this->adviser_model->get_adviser($this->en);

		$this->load->view('components/header.php');
		$this->load->view('adviser/profile', $data);
		$this->load->view('components/footer.php');
	}

	/**
	 * display adviser profile edit page
	 */
	public function edit(){
		$this->check_session();
		
		$data['adviser'] = $this->adviser_model->get_adviser($this->en);
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

		$data['grad_advisees'] = $this->adviser_model->get_grad_advisees($this->en);
		$this->load->view('adviser/grad_advisees', $data);
	}

	/**
	 * returns the advisee's profile
	 * @param  string $student_number student number of the advisee
	 */
	public function view_advisee($student_number) {
		$this->check_session();
		
		$this->db->select('last_name, first_name, middle_name, student_number, classification, curriculum, contact_number, email_address, college_address, home_address');
		$data['student'] = $this->db->get_where('student', array('student_number' => $student_number))->row_array();

		$this->load->view('components/header.php');
		$this->load->view('adviser/student_profile', $data);
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