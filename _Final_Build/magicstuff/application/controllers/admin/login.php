<?php

class Login extends Controller {
	
	function validate_credentials()
	{		
	
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[32]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
///
///Changed Login USERNAME from 	6 ---> 5
///Changed Login PASS from		6 ---> 4
///		
	if($this->form_validation->run() == TRUE)
		{
			$this->load->model('admin/membership_model');
			$query = $this->membership_model->validate();
			
			if($query) // if the user's credentials validated...
			{
				$data = array(
					'username' => $this->input->post('username'),
					'is_logged_in' => true
				);
				$this->session->set_userdata($data);
				redirect('admin/site');
			}
			else // incorrect username or password
			{
				//include error to say user or pass is not approved
				echo '<div id="error">';			
				echo '<p class="error">User name or password is not correct</p>';		
				echo '</div>';	
				
				$data['main_content'] = 'admin/login_form';
				$data['title'] = 'Login | STUFF the Magic Mascot | Content Management System';
				$this->load->view('admin/includes/temp_min', $data);
			}
		}
		else{
		//form_validation did not pass -- function validate_credentials()
		$data['main_content'] = 'admin/login_form';
		$data['title'] = 'Login | STUFF the Magic Mascot | Content Management System';
		$this->load->view('admin/includes/temp_min', $data);	
		}
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		$data['main_content'] = 'admin/login_form';
		$this->load->view('admin/includes/temp_min', $data);
	}

}?>