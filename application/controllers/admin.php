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
		$this->load->view('admin/admin_view');
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

		$this->load->model('admin_model');
		$employee_number = $this->input->post('employee_number');
		$result = $this->admin_model->delAdviser($employee_number);

		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];

		$action = $username . ' deleted ' . $employee_number;

		$this->load->model('admin_model');
		$this->admin_model->createLog($username, $action);

		$this->load->helper("url");
		$this->load->view('components/header.php');
		$this->load->view('admin/adviser_delete_view.php', $employee_number);
		$this->load->view('components/footer.php');
	}

	//student section
	public function view_students(){
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
			$role = $this->session->userdata('table');
			if($role != 'administrator') {
				$this->load->view('components/header.php');
				$this->load->view('restricted.php');
				$this->load->view('components/footer.php');

				return;
			}

            $udata['student_number'] = $this->input->post('student_number');
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

        public function edit(){
			$role = $this->session->userdata('table');
			if($role != 'administrator') {
				$this->load->view('components/header.php');
				$this->load->view('restricted.php');
				$this->load->view('components/footer.php');

				return;
			}

            $studnum = $this->uri->segment(3);
            $data['student'] = $this->admin_model->getById($studnum);
            $this->load->view('admin/Student_edit', $data);
        }

        public function update(){
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

        public function delete($studnum){

			$role = $this->session->userdata('table');
			if($role != 'administrator') {
				$this->load->view('components/header.php');
				$this->load->view('restricted.php');
				$this->load->view('components/footer.php');

				return;
			}

			$this->admin_model->delete_a_student($studnum);

            $this->index();
        }

	public function check_session(){
		if(!$this->session->userdata('logged_in')){
			//If no session, redirect to login page
			$this->load->helper('url');
			redirect('login', 'refresh');
		}
	}
}
