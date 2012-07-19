<?php

class Videos extends Controller 
{
	function __construct()
	{
		parent::Controller();
		$this->is_logged_in();
	}
	
	function index()
	{
		$this->load->view('admin/includes/header');
		$this->load->view('admin/includes/nav');
		$this->load->view('admin/videos');
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