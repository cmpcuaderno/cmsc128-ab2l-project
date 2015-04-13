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

		$data['adviser'] = $this->adviser_model->get_adviser($this->en);

		$this->load->view('components/header.php');
		$this->load->view('adviser/profile', $data);
		$this->load->view('components/footer.php');
	}

	/**
	 * display adviser profile edit page
	 */
	public function edit(){
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
		$this->load->helper('url');
		$this->adviser_model->update($en);

		/* redirect to adviser profile */
		redirect('adviser/profile');
	}
}