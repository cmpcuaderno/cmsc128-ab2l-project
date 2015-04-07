<?php

class Adviser_model extends CI_Model {
		
	public function __construct() {
		$this->load->database();									//loads the StudentAdviserRecord database
	}

	public function get_adviser($target) {
		$query = $this->db->get_where('adviser', array('employee_number' => $target));		//fetch the adviser with matching
		return $query->row_array();									//employee number
	}

	public function update($employee_number) {
		$data = array(											//poplate array with input from forms
			'last_name' => $this->input->post('last_name'),
			'first_name' => $this->input->post('first_name'),
			'middle_name' =>  $this->input->post('middle_name'),
			'level' => $this->input->post('level'),
			'specialization' =>  $this->input->post('specialization')

		);

		$this->db->where('employee_number', $employee_number);
		$this->db->update('adviser', $data);								//update the values of the attributes
	}
}
