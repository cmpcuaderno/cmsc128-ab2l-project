<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adviser extends CI_Controller{
    public function index(){
		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('adviser/adviser_view.php');	
		$this->load->view('components/footer.php');			
		}
}