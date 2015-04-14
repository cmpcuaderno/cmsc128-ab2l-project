<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		$this->load->database();
		//session_start();
		$_SESSION["loggedin"] = false;
		session_destroy();
		redirect('/','refresh');
	}
}