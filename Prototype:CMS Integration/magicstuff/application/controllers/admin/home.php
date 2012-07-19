<?php

class Home extends Controller {

	function __construct()
	{
		parent::Controller();
		$this->load->model('admin/home_model');
		$this->is_logged_in();
	}
	
	function index()
	{
		$data['main_content'] = 'admin/login_form';
		$this->load->view('admin/includes/template', $data);
				
	}
	
	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if( $is_logged_in == true )
		{
			redirect('admin/site');
		}
	}
	
}	
?>