<?php
Class Student_model extends CI_Model
{
    function login($username, $password, $isadmin) {
        $this->db->select('User_session_id, User_account, User_password');
        $this->db->from('user');
        $this->db->where('User_account', $username);
        $this->db->where('User_password', $password);
        $this->db->where('User_isadmin', $isadmin);
        $this->db->limit(1);
        $query = $this->db->get();

        if($query -> num_rows() == 1) {
          return $query->result();
        }
        else {
          return false;
        }
    }

    function search_student($username, $password){
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();

        if($query -> num_rows() == 1) {
          return $query->result();
        }
        else {
          return false;
        }
    }

    function fetch_student_grades($student_number){
        $this->db->select('*');
        $this->db->from('student_course');
        $this->db->where('student_number', $student_number);
        $query = $this->db->get();

        if($query -> num_rows() > 0) {
          return $query->result();
        }
        else {
          return false;
        }
    }

    function get_student_number($username, $password){
        $this->db->select('student_number');
        $this->db->from('student');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();

        if($query -> num_rows() == 1) {            
          $row = $query->row();
          return $row->student_number;
        }
        else {
          return false;
        }
    }

    function update_student($username,$password,$data){
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->update('student', $data);
    }
  
    function search_database($adviser, $type,$per_pg, $offset){

        if(strcmp($type,'name')==0){
            $this->db->select('*');
            $this->db->like('last_name', $adviser);
            $this->db->or_like('middle_name', $adviser);
            $this->db->or_like('first_name', $adviser);
            $query = $this->db->get('adviser',$per_pg,$offset);
            return $query;
        }
        if(strcmp($type,'level')==0){
            $this->db->select('*');
            $this->db->like('level', $adviser);
            $query = $this->db->get('adviser',$per_pg,$offset);
            return $query;
        }
       if(strcmp($type,'specialization')==0){
            $this->db->select('*');
            $this->db->like('specialization', $adviser);
            $query = $this->db->get('adviser',$per_pg,$offset);
            return $query;
        }
    }

    function check_password($old){
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where('password', sha1($old));
        $query = $this->db->get();
        return $query;    

    }

    function change_password($username, $password, $newpassword){
        $data =array(
            'password' => $newpassword
        );
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where('username', $username);
        $this->db->where('password', $password);  
        $this->db->update('student', $data);
    }

    function view_adviser($username){
        $this->db->select('*');  
        $this->db->from('student'); 
        $this->db->where('username',$username); 
        $studnum = $this->db->get(); 

        foreach($studnum->result() as $row ):
                $username = $row->student_number;
        endforeach;

        $this->db->select('*');    
        $this->db->from('adviser');  
        $this->db->join('student_adviser', 'adviser.employee_number = student_adviser.employee_number');
        $this->db->where('student_adviser.student_number', $username);
        $query = $this->db->get();
        return $query;

    }
}
?>