<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
   $this->load->helper('url');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

	//addslashes
	//mysql_escape_string
	//transform data

   
   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('login_view');
	 $this->load->view('components/footer.php');	
   }
   else
   {
     //Go to private area
        $table = $this->session->userdata('table');
	 $this->load->library('session');
        if (strcmp($table, 'administrator') == 0){
            redirect('admin', 'refresh');
        } else if (strcmp($table, 'adviser') == 0){
            redirect('adviser', 'refresh');
        } else if (strcmp($table, 'student') == 0){
            redirect('student', 'refresh');
        }
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
   
   $table = $this->input->post('table');

   //query the database
   $result = $this->user->login($username, sha1($password), $table);

   $this->load->library('session');
   
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'username' => $row->username
       );
       $this->session->set_userdata('logged_in', $sess_array);
       $this->session->set_userdata('table', $table);
     }
	$this->load->library('session');
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>