<?php
class Login extends Controller {

	function upload_content(){
		if($this->form_validation->run() == FALSE)
		{
			echo '<p>Fail</p>';
		}
		
		else
		{
			$this->load->model('home_model');
			
			if($query = $this->home_model->upload_mainContent())
			{
				$data['main_content'] = 'signup_succesful';
				$this->load->view('includes/template', $data);
			}
			else
			{
				echo '<p>Fail</p>';		
			}
		}
	}
	
	function upload_photo(){}
}	
?>