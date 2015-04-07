<?php

class Adviser extends CI_Controller {
	/*
	* Temporary, will be removed if logging in is already implemented.
	* Modify value to change the adviser being loaded
	*/


	public function __construct() {
		parent::__construct();
		$this->load->model('adviser_model');							//load the adviser model
	}

	public function profile() {
		$en = '1234-0000001';
		$data['adviser'] = $this->adviser_model->get_adviser($en);		//fetch adviser with the specified employee number	
	
		$this->load->view('adviser/profile', $data);
	}

	public function edit() {
		$en = '1234-0000001';			

		$data['adviser'] = $this->adviser_model->get_adviser($en);		//fetch old data and display in edit page
		$this->load->view('adviser/edit', $data);
	}

	public function update($en) {
		$this->load->helper('url');
		$this->adviser_model->update($en);					//update the values of the adviser with the specified data
		redirect('adviser/profile');						//redirect to profile
	}
}
