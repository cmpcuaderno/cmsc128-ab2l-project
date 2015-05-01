<?php
Class Student_model extends CI_Model
{
 function login($username, $password, $isadmin)
  {
    $this -> db -> select('User_session_id, User_account, User_password');
    $this -> db -> from('user');
    $this -> db -> where('User_account', $username);
    $this -> db -> where('User_password', $password);
    $this -> db -> where('User_isadmin', $isadmin);
    $this -> db -> limit(1);

    $query = $this -> db -> get();

    if($query -> num_rows() == 1)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }

  function update_student($username,$password,$data){
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $this->db->update('student', $data);
  }
  
         function search_database($adviser, $type,$per_pg, $offset){
         //function search_database($adviser, $type){
           
                if(strcmp($type,'name')==0){
                    $this->db->select('*');
                   // $this->db->from('adviser');
                    $this->db->like('last_name', $adviser);
                    $this->db->or_like('middle_name', $adviser);
                    $this->db->or_like('first_name', $adviser);
                    $query = $this->db->get('adviser',$per_pg,$offset);
                    //$query = $this->db->get();
                    return $query;

                }
                if(strcmp($type,'level')==0){
                    $this->db->select('*');
                   // $this->db->from('adviser');
                    $this->db->like('level', $adviser);
                    $query = $this->db->get('adviser',$per_pg,$offset);
                   // $query = $this->db->get();
                    return $query;

                }
               if(strcmp($type,'specialization')==0){
                    $this->db->select('*');
                    //$this->db->from('adviser');
                    $this->db->like('specialization', $adviser);
                    $query = $this->db->get('adviser',$per_pg,$offset);
                    //$query = $this->db->get();
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
    function change_password($password,$newpassword){

        $data =array(
            'password' => sha1($newpassword)
            );
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where('password', sha1($password));    
        $this->db->update('student', $data);
        
        
    }

}
?>