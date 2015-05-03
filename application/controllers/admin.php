<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
		
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
			
		$this->load->model('admin_model');
		$data['table'] = $this->admin_model->viewLogs();
			
		$this->load->helper('url');
		$this->load->view('components/header.php');
		$this->load->view('admin/admin_index', $data);
		$this->load->view('components/footer.php');	
	}

	public function register(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
		
		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/adviser-register-view');
		$this->load->view('components/footer.php');
		/* loads the admin_view.php file in views folder */
	}

	public function do_register(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
		
		$udata['employee_number'] = $this->input->post('employee_number');
		$udata['username'] = $this->input->post('username');
		$udata['password'] = $this->input->post('password');
		$udata['last_name'] = $this->input->post('last_name');
		$udata['first_name'] = $this->input->post('first_name');
		$udata['middle_name'] = $this->input->post('middle_name');
		$udata['specialization'] = $this->input->post('specialization');
		$udata['level'] = $this->input->post('level');
		
		
		$this->admin_model->add_adviser($udata);
			
		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
			
		$action = $username . ' added ' . $udata['first_name'] . ' ' . $udata['middle_name'] . ' ' . $udata['last_name'];
		
		$this->load->model('admin_model');
		$this->admin_model->createLog($username, $action);
			
		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/admin_index');
		$this->load->view('components/footer.php');
		
		redirect('admin', 'refresh');
	}

	public function noOfGraduates(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
		
		$result = $this->admin_model->noOfGraduates();

		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/no_of_graduates_view.php', $result);
		$this->load->view('components/footer.php');
	}
	
	public function view_advisers(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
		
		$result['list'] = $this->admin_model->view_advisers();
	
		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/view_advisers', $result);
		$this->load->view('components/footer.php');
	}
        
    public function delAdviser(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
        
		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/adviser_delete_view.php'); 
		$this->load->view('components/footer.php');
        }
        
	public function con_delAdviser(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
		
		$this->load->model('admin_model');
		$search_keyword = $this->input->post('search_keyword');
		$result['list'] = $this->admin_model->search_adviser($search_keyword);
		
		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/adviser_delete_view.php', $result); 
		$this->load->view('components/footer.php');
	}
	
	public function confirmed_delete_adviser($employee_number){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
		
		$this->admin_model->delAdviser($employee_number);

		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
			
		$action = $username . ' deleted ' . $employee_number;
		
		$this->load->model('admin_model');
		$this->admin_model->createLog($username, $action);
            
		$this->index();
    }
        
    public function edit_adviser(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
        
		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/adviser_edit_view.php'); 
		$this->load->view('components/footer.php');
        }
	
	public function con_edit_adviser(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
		
		$this->load->model('admin_model');
		$search_keyword = $this->input->post('search_keyword');
		$result['list'] = $this->admin_model->search_adviser($search_keyword);
		
		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/adviser_edit_view.php', $result); 
		$this->load->view('components/footer.php');
	}
	
	public function edit_adviser_details($employee_number){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
		
		$this->load->model('admin_model');
		$result['adviser'] = $this->admin_model->search_adviser($employee_number);
	
		$this->load->view('components/header.php');
		$this->load->view('admin/adviser_edit_details_view.php', $result); 
		$this->load->view('components/footer.php');
	}
	
	public function confirmed_edit_adviser(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
		
		$employee_number = $this->input->post('employee_number');
	
		$udata['last_name'] = $this->input->post('last_name');
		$udata['first_name'] = $this->input->post('first_name');
		$udata['middle_name'] = $this->input->post('middle_name');
		$udata['specialization'] = $this->input->post('specialization');
		$udata['level'] = $this->input->post('level');
	
		$this->admin_model->edit_adviser($employee_number, $udata);

		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
			
		$action = $username . ' edited ' . $employee_number;
		
		$this->load->model('admin_model');
		$this->admin_model->createLog($username, $action);
            
		$this->index();
    }
	
	//student section
	public function check_session(){
		if(!$this->session->userdata('logged_in')){
			//If no session, redirect to login page
			$this->load->helper('url');
			redirect('login', 'refresh');
		}
	}

	public function view_students(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
		
		$data['user_list'] = $this->admin_model->get_all_students();
		
		$this->load->helper("url");
	    $this->load->view('components/header.php');
	    $this->load->view('admin/Student_view_all', $data);
        $this->load->view('components/footer.php');
	}
        
    public function add_form(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
		
		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/Student_insert');
		$this->load->view('components/footer.php');
	}
        
	public function insert_new_student(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
		
		$udata['student_number'] = $this->input->post('student_number');
		$udata['last_name'] = $this->input->post('last_name');
		$udata['first_name'] = $this->input->post('first_name');
		$udata['middle_name'] = $this->input->post('middle_name');
		$udata['classification'] = $this->input->post('classification');
		$udata['curriculum'] = $this->input->post('curriculum');
		$udata['contact_number'] = $this->input->post('contact_number');
		$udata['email_address'] = $this->input->post('email_address');
		$udata['college_address'] = $this->input->post('college_address');
		$udata['home_address'] = $this->input->post('home_address');
		$udata['relative'] = $this->input->post('relative');
		
		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
			
		$action = $username . ' added ' . $udata['first_name'] . ' ' . $udata['middle_name'] . ' ' . $udata['last_name'];
		
		$this->load->model('admin_model');
		$this->admin_model->createLog($username, $action);
		
		$res = $this->admin_model->insert_student_to_db($udata);
		
		//change this
		if($res){
			header('location:'.base_url()."index.php/admin/".$this->index());
		}
	}
        
    public function search_student_keyword(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
		
		$keyword = $this->input->post('search_keyword');
		$data['user_list'] = $this->admin_model->search_student($keyword);

		$this->load->view('components/header.php');
		$this->load->view('admin/Student_view_all', $data);
		$this->load->view('components/footer.php');
    }
        
    public function edit_student(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
        
		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/Student_edit.php'); 
		$this->load->view('components/footer.php');
    }
        
    public function con_edit_student(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
		
		$this->load->model('admin_model');
		$search_keyword = $this->input->post('search_keyword');
		$result['list'] = $this->admin_model->search_student($search_keyword);
		
		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/Student_edit.php', $result); 
		$this->load->view('components/footer.php');
	}
    
	public function edit_student_details($student_number){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
		
		$this->load->model('admin_model');
		$result['student'] = $this->admin_model->search_student($student_number);
	
		$this->load->view('components/header.php');
		$this->load->view('admin/Student_edit_details.php', $result); 
		$this->load->view('components/footer.php');
	}
	
	public function confirmed_edit_student(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
		
		$student_number = $this->input->post('student_number');
	
		$udata['username'] = $this->input->post('username');
		$udata['password'] = $this->input->post('password');
		$udata['last_name'] = $this->input->post('last_name');
		$udata['first_name'] = $this->input->post('first_name');
		$udata['middle_name'] = $this->input->post('middle_name');
		$udata['classification'] = $this->input->post('classification');
		$udata['curriculum'] = $this->input->post('curriculum');
		$udata['contact_number'] = $this->input->post('contact_number');
		$udata['email_address'] = $this->input->post('email_address');
		$udata['college_address'] = $this->input->post('college_address');
		$udata['home_address'] = $this->input->post('home_address');
		$udata['relative'] = $this->input->post('relative');
		
		$this->admin_model->edit_student($student_number, $udata);

		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
			
		$action = $username . ' edited ' . $student_number;
		
		$this->load->model('admin_model');
		$this->admin_model->createLog($username, $action);
            
		$this->index();
    }
        
	public function update(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
		
		$mdata['username'] = $_POST['username'];
		
		$res = $this->admin_model->update_info($mdata, $_POST['student_number']);
		
		if($res){
			header('location:'.base_url()."index.php/admin/".$this->index());
		}
	}
        
    public function delStudent(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
        
		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/Student_delete.php'); 
		$this->load->view('components/footer.php');
    }
        
	public function con_delStudent(){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
		
		$this->load->model('admin_model');
		$search_keyword = $this->input->post('search_keyword');
		$result['list'] = $this->admin_model->search_adviser($search_keyword);
		
		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/Student_delete.php', $result); 
		$this->load->view('components/footer.php');
	}
	
	public function confirmed_delete_student($student_number){
		$this->check_session();

		$role = $this->session->userdata('table');
		if($role != 'administrator') {
			$this->load->view('components/header.php');
			$this->load->view('restricted.php');
			$this->load->view('components/footer.php');

			return;
		}
		
		$this->admin_model->delStudent($student_number);

		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
			
		$action = $username . ' deleted ' . $student_number;
		
		$this->load->model('admin_model');
		$this->admin_model->createLog($username, $action);
            
		$this->index();
    }	
	
	
	// CHANGE ADVISER
	public function change_adviser(){
		$this->check_session();
        
		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/Student_change_adviser.php'); 
		$this->load->view('components/footer.php');
        }
        
    public function con_change_adviser(){
		$this->check_session();
		
		$this->load->model('admin_model');
		$search_keyword = $this->input->post('search_keyword');
		$result['list'] = $this->admin_model->search_student_adviser($search_keyword);
		
		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/Student_change_adviser.php', $result); 
		$this->load->view('components/footer.php');
	}
	
	public function change_adviser_details($student_number){
		$this->load->model('admin_model');
		$result['student'] = $this->admin_model->search_student_adviser($student_number);
                
		$this->load->view('components/header.php');
		$this->load->view('admin/Student_change_details.php', $result); 
		$this->load->view('components/footer.php');
	}
	
	public function confirmed_change_adviser(){
		$student_number = $this->input->post('student_number');
	
		$udata['employee_number'] = $this->input->post('employee_number');
                $udata['student_number'] = $this->input->post('student_number');
                $udata['isGraduated'] = $this->input->post('isGraduated');
                $udata['start_date'] = $this->input->post('start_date');
                $udata['end_date'] = $this->input->post('end_date');
                
		$this->admin_model->adviser_change($student_number, $udata);

		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
			
		$action = $username . ' edited ' . $student_number;
		
		$this->load->model('admin_model');
		$this->admin_model->createLog($username, $action);
            
		$this->index();
        }
		
		
		// ADD, EDIT SUBJECTS
		
		public function add_subject(){
            $this->check_session();
		
		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/Student_insert_subject');
		$this->load->view('components/footer.php');
        }
        
        public function insert_subject(){
            $udata['student_number'] = $this->input->post('student_number');
            $udata['course_code'] = $this->input->post('course_code');
            $udata['year_taken'] = $this->input->post('year_taken');
            $udata['term_taken'] = $this->input->post('term_taken');
            $udata['final_grade'] = $this->input->post('final_grade');
            
            $res = $this->admin_model->insert_subject_to_db($udata);

            //change this
            if($res){
                header('location:'.base_url()."index.php/admin/".$this->index());

            }

        }
        
        public function edit_subject(){
		$this->check_session();
        
		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/Subject_edit.php'); 
		$this->load->view('components/footer.php');
        }
        
         public function con_edit_subject(){
		$this->check_session();
		
		$this->load->model('admin_model');
		$search_keyword = $this->input->post('search_keyword');
		$result['list'] = $this->admin_model->search_student_subject($search_keyword);
		
		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/Subject_edit.php', $result); 
		$this->load->view('components/footer.php');
	}
    
	public function edit_subject_details($student_number){
		$this->load->model('admin_model');
		$result['student'] = $this->admin_model->search_student_subject($student_number);
                
		$this->load->view('components/header.php');
		$this->load->view('admin/Subject_edit_details.php', $result); 
		$this->load->view('components/footer.php');
	}
	
	public function confirmed_edit_subject(){
		$student_number = $this->input->post('student_number');
	
		$udata['course_code'] = $this->input->post('course_code');
                $udata['year_taken'] = $this->input->post('year_taken');
                $udata['term_taken'] = $this->input->post('term_taken');
                $udata['final_grade'] = $this->input->post('final_grade');
                
                $this->admin_model->change_subject($student_number, $udata);

		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
			
		$action = $username . ' edited ' . $student_number;
		
		$this->load->model('admin_model');
		$this->admin_model->createLog($username, $action);
            
		$this->index();
        }
}
