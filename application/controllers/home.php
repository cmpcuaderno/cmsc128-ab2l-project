<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
    $this->load->library('session');
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->view('home_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     $this->load->helper('url');
     redirect('login', 'refresh');
   }
 }

 function logout()
 {
    $this->load->library('session');
    $this->load->helper('url');
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }

}

?> 
