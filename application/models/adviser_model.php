<?php
Class Adviser_model extends CI_Model
{

  function login($username, $password, $isadmin){
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

  /**
   * get the attributes of an adviser
   * @param  string $target - employee number of an adviser
   * @return array - attributes of the adviser with the specified employee number
   */
  public function get_adviser($target){
    $query = $this->db->get_where('adviser', array('username' => $target));
    return $query->row_array();
  }

  /**
   * update the attributes of an adviser
   * @param  string $employee_number - employee number of an adviser
   */
  public function update($employee_number) {
    $data = array(
    'specialization' =>  $this->input->post('specialization')
    );

    $this->db->where('employee_number', $employee_number);
    $this->db->update('adviser', $data);
  }

  /**
   * get students with 'Graduate' classification under a target adviser
   * @param  String $employee_number - employee number of the adviser
   * @return array - all graduate students under an adviser
   */
  public function get_grad_advisees($employee_number){
      $query = $this->db->query("Select * from student s left join student_adviser sa on sa.student_number = s.student_number where sa.employee_number = '" . $employee_number . "' AND sa.isGraduated = 1");

      return $query->result_array();
  }

  /**
   * Query to retrieve all advisees of an adviser
   * @param  string $employee_number - employee number of the adviser
   * @return array - all students under an adviser
   */
  public function get_advisees($employee_number) {
    $query = $this->db->query("Select * from student s left join student_adviser sa on sa.student_number = s.student_number where sa.employee_number = '" . $employee_number . "'");

      return $query->result_array();
  }

  public function check_password($old){
      $this->db->select('*');
      $this->db->from('adviser');
      $this->db->where('password', sha1($old));
      $query = $this->db->get();
      return $query;

  }

  public function change_password($username, $password, $newpassword){
        $data =array(
            'password' => $newpassword
        );
        $this->db->select('*');
        $this->db->from('adviser');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->update('adviser', $data);
    }
  /**
   * get grades of student with specified student number
   * @param  string $student_number target student's student number
   * @return array of student's grades
   */
  public function fetch_student_grades($student_number) {
    $this->db->select('*');
        $this->db->from('student_course');
        $this->db->where('student_number', $student_number);
        $this->db->order_by('year_taken', 'incr');
        $this->db->order_by('term_taken', 'incr');
        $query = $this->db->get();

        if($query->num_rows() > 0) {
          return $query->result();
        }
        else {
          return false;
        }
  }
}