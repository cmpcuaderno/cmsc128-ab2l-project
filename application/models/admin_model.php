<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Admin_model extends CI_Model {

        public function __construct(){
            parent::__construct();
        }

        public function add_adviser(){
            $username = $this->input->post('username');
        
            $data = array(
                'employee_number' => $this->input->post('employee_number'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'first_name' => $this->input->post('first_name'),
                'middle_name' => $this->input->post('middle_name'),
                'last_name' => $this->input->post('last_name'),
                'specialization' => $this->input->post('specialization'),
                'level' => $this->input->post('level')
            );

            $this->db->insert('adviser',$data);

            return $username;
        }

        public function noOfGraduates(){
		$this->db->select('employee_number');
		$this->db->from('adviser');
		$query = $this->db->get();

		foreach ($query->result() as $data){
                    $this->db->select('student_number');
                    $this->db->from('student_adviser');
                    $this->db->where('isGraduated = 1 AND employee_number = "' . $data->employee_number . '"');

                    $rows = $this->db->get()->num_rows();
                    
                    //get the employee name
                    $q = $this->db->query('SELECT * FROM adviser WHERE employee_number = "' . $data->employee_number . '"');
                    
                    if ($q->num_rows() > 0){
                        $row = $q->row();
                        $name = $row->first_name . ' ' . $row->middle_name . ' ' . $row->last_name;
                        
                        $adviser['hashmap'][] = (object) array('emp_name' => $name, 'num_rows' => $rows);
                    }

                }
                
                return $adviser;
        
        }
        
        public function delAdviser($enum){
		$this->db->delete('adviser');
		$this->db->where('employee_number', $enum);
        }
		
        public function createLog($username, $action){
            $date_time = $this->db->query("SELECT NOW();")->row_array()['NOW()'];
        
             $data = array(
                'username' => $username,
                'date_time' => $date_time,
                'action' => $action,
            );

            $this->db->insert('admin_logs',$data);

            return true;
        }
        
        public function viewLogs(){
            $query = $this->db->query('SELECT * FROM admin_logs');
            
            foreach ($query->result() as $data){
                $rv['logs'][] = (object) array('username' => $data->username, 'date_time' => $data->date_time, 'action' => $data->action);
            }
            
            return $rv;
        }

    }