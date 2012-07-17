<?php class Login extends Controller
{
	function index()
	{
		$data['main_content'] = 'login_form';
		$data['title'] = 'Login Stuff';
		$this->load->view('includes/temp_min', $data);
		$this->is_logged_in();
	}
	
	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if($is_logged_in)
		{
			redirect('/site', 'refresh');		
		}
	}

	function signup()
	{
		$data['main_content'] = 'signup_form';
		$data['title'] = 'Create New User';
		$this->load->view('includes/temp_min', $data);
	}
	
	function validate_credentials()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');

		if($this->form_validation->run() == TRUE)
		{
			$this->load->model('membership_model');
			$query = $this->membership_model->validate();
			
			if($query) // if the user's credentials validated...
			{
				$data = array(
					'username' => $this->input->post('username'),
					'is_logged_in' => true
					);
				$this->session->set_userdata($data);
				redirect('/site');
			}
			else // incorrect username or password
			{
				//include error to say user or pass is not approved
				echo '<div id="error">';			
				echo '<p class="error">User name or password is not correct</p>';		
				echo '</div>';	
				
				$this->index();
			}

		}else{
			//form_validation did not pass -- function validate_credentials()
			$this->index();
		}
	}	

	function create_member()
	{
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		
		
		if($this->form_validation->run() == TRUE)
		{
			$this->load->model('membership_model');			
			if($query = $this->membership_model->create_member())
			{
				$data['main_content'] = 'signup_successful';
				$this->load->view('includes/temp_min', $data);
			}
		}else{
			$data['main_content'] = 'signup_form';
			$data['title'] = 'Create New User';
			$this->load->view('includes/temp_min', $data);
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('../');	
	}
}