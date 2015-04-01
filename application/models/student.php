<?php
Class Student extends CI_Model
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
 
}
?>