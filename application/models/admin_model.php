<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Admin_model extends CI_Model {

        public function __construct(){
            parent::__construct();
        }

        public function add_adviser($data){
            return $this->db->insert('adviser', $data);
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
        
        public function view_advisers(){
		$query = $this->db->query('SELECT employee_number, username, last_name, first_name, middle_name, specialization, level FROM adviser');
		
		foreach ($query->result() as $data){
                $rv['advisers'][] = (object) array('employee_number' => $data->employee_number, 'username' => $data->username, 'last_name' => $data->last_name, 'first_name' => $data->first_name, 'middle_name' => $data->middle_name, 'specialization' => $data->specialization, 'level' => $data->level);
            }
            
            return $rv;
		
			return $query->result();
        }
        
        public function delAdviser($employee_number){
			$data = array(
			'last_name' => $this->input->post('last_name'),
			'first_name' => $this->input->post('first_name'),
			'middle_name' =>  $this->input->post('middle_name'),
			'level' => $this->input->post('level'),
			'specialization' =>  $this->input->post('specialization')
			);

			$this->db->where('employee_number', $employee_number);
			$this->db->delete('adviser', $data);
        }
		
		public function search_adviser($keyword){
			$this->db->like('employee_number', $keyword);
			$this->db->or_like('username', $keyword);
			$query = $this->db->get('adviser');
				
			return $query->result();
        }
		
		public function edit_adviser($employee_number, $data){
		$this->db->where('employee_number', $employee_number);
		$this->db->update('adviser', $data);
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
            $query = $this->db->query('SELECT * FROM admin_logs ORDER BY date_time DESC');
            
            foreach ($query->result() as $data){
                $rv['logs'][] = (object) array('username' => $data->username, 'date_time' => $data->date_time, 'action' => $data->action);
            }
            
            return $rv;
        }
        
	//student section
	public function get_all_students(){
		$query = $this->db->get('student');

		return $query->result();
	}
	
	public function insert_student_to_db($data){
		return $this->db->insert('student', $data);
	}
	
	public function delStudent($student_number){
		$this->db->where('student_number', $student_number);
            $this->db->delete('student');
            
            $this->db->where('student_number', $student_number);
            $this->db->delete('student_adviser');
	}
	
	public function edit_student($student_number, $data){
		$this->db->where('student_number', $student_number);
		$this->db->update('student', $data);
	}

	
	public function search_student($keyword){
		$this->db->like('student_number', $keyword);
		$this->db->or_like('username', $keyword);
		$query = $this->db->get('student');
		
		return $query->result();
	}
	
	public function search_student_adviser($keyword){
            $this->db->like('student_number', $keyword);
            $query = $this->db->get('student_adviser');
            
            return $query->result();
        }
        
        public function adviser_change($student_number, $data){
            $this->db->where('student_number', $student_number);
            $this->db->update('student_adviser', $data);
        }
        
        public function insert_subject_to_db($data){
            return $this->db->insert('student_course', $data);
        }
        
        public function search_student_subject($keyword){
            $this->db->like('student_number', $keyword);
            $query = $this->db->get('student_course');
            
            return $query->result();
        }
        
        public function change_subject($student_number, $data){
            $this->db->where('student_number', $student_number);
            $this->db->update('student_course', $data);
        }
}