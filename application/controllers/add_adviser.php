<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_student extends CI_Controller {

	public function index()
	{
		$this->load->database();
		$enum = $this->input->post('enum');	
		$uname = $this->input->post('uname');		
		$pw = $this->input->post('pw');
		$last_name = $this->input->post('last_name');
		$first_name = $this->input->post('first_name');
		$middle_name = $this->input->post('middle_name');
		$spec = $this->input->post('spec');
		$lvl = $this->input->post('lvl');

		
                $query = $this->db->query("INSERT INTO adviser (employee_number, username, password, last_name, first_name, middle_name, specialization, level) 
                    VALUES ('$enum', '$uname', '$pw', '$last_name', '$first_name', '$middle_name', '$spec', '$lvl')";);
		
		echo $first_name . 'has been added.';
		redirect('/');
	}
}
