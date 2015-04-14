<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Admin_model extends CI_Model {
    
        public function __construct(){
            parent::__construct();
        }
        
        public function add_adviser(){
            $data = array(
                'employee_number' => $this->input->post('employee_number'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'first_name' => $this->input->post('first_name'),
                'middle_name' => $this->input->post('middle_name'),
                'last_name' => $this->input->post('last_name'),
                'specialization' => $this->input->post('specialization'),
                'level' => $this->input->post('level')
                //'registred' => time()
            );
        
            $this->db->insert('adviser',$data);
        
            return true;
        }
        
        public function noOfGraduates(){
		$this->db->select('employee_number');
		$this->db->from('adviser');
		$query = $this->db->get();
		
		foreach ($query->result() as $data){
                    $this->db->select('student_number');
                    $this->db->from('student_adviser');
                    $this->db->where('isGraduated = 1 AND employee_number = "$data->employee_number"');
                    
                    $adviser['hashmap'][] = (object) array('emp_no' => $data->employee_number, 'num_rows' => $this->db->get()->num_rows());
                }
                
		return $adviser;
        }
        
        public function delAdviser($enum){
	   		$this->db->delete('student_adviser', array('employee_number', $enum));
		}
    
    }
    
