<?php

class Site extends Controller 
{
	function __construct()
	{
		parent::Controller();
		$this->is_logged_in();
	}
	
	function index()
	{
		$this->load->view('includes/header');
		$this->load->view('cms/nav');
		$this->load->view('logged_in_area');
		$this->load->view('includes/footer');	
	}

	function members_area()
	{
		$this->load->view('includes/header');
		$this->load->view('cms/nav');
		$this->load->view('logged_in_area');
		$this->load->view('includes/footer');
	}
	function another_page() // just for sample
	{
		echo 'good. you\'re logged in.';
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
