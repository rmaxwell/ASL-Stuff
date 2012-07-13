<?php
class Home extends Controller {
	
	function index(){
	/*	$this->load->view('includes/header');
		$this->load->helper('form');
		$data['title'] = 'Booking';
		$data['heading'] = "Update Booking Page's Info";
		$data['book_data'] = $this->book_model->get();
		$this->load->view('cms/nav');
		$this->load->view('booking', $data);
	*/
	}
	
	
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