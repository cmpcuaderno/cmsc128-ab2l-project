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
    
    }
    