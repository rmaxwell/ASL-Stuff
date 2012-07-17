<?php

class Site extends Controller 
{
	function __construct()
	{
		parent::Controller();
		$this->load->model('site_model');
		$this->is_logged_in();
	}
	
	function index()
	{
		$this->load->view('includes/header');
		$this->load->helper('form');
		$data['title'] = 'Home';
		$data['heading'] = "Update Home Page";
		$data['site_data'] = $this->site_model->get();
		$this->load->view('cms/nav');
		$this->load->view('logged_in_area', $data);
		$this->load->view('includes/footer');	
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
?>
