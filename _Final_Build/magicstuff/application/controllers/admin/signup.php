<?php class Signup extends Controller {
	function __construct()
	{
		parent::Controller();
		$this->load->model('admin/site_model');
		$this->is_logged_in();
	}

	function newuser()
	{
		$data['main_content'] = 'admin/signup_form';
		$data['title'] = 'Login STUFF the Magic Mascot | Create new user | Content Management System';
		$this->load->view('admin/includes/temp_min', $data);
	}
	
	function create_member()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[6]|max_length[32]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|matches[password2]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required');
		
		
		if($this->form_validation->run() == TRUE)
		{
			$this->load->model('admin/membership_model');			
			if($query = $this->membership_model->create_member())
			{
				$data['main_content'] = 'admin/signup_successful';
				$data['title'] = 'STUFF the Magic Mascot | Success Created New User Content Management System';
				$this->load->view('admin/includes/temp_min', $data);
			}
		}else{
			$data['main_content'] = 'admin/signup_form';
			$data['title'] = 'STUFF the Magic Mascot | Create New User | Content Management System';
			$this->load->view('admin/includes/temp_min', $data);
		}
	}

	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			echo 'You don\'t have permission to access this page. <a href="../">Login</a>';	
			die();		
		}		
	}	
}