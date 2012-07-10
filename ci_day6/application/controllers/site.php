<?php

class Site extends Controller 
{
	function __construct()
	{
		parent::Controller();
		$this->is_logged_in();
	}

	function members_area()
	{
		$this->load->view('cms/nav');
		$this->load->view('logged_in_area');
	}
	
	/*
function gallery()
	{
		$this->load->view('nav');
		$this->load->view('gallery');
	}
	
	function videos()
	{
		$this->load->view('nav');
		$this->load->view('videos');
	}
	
	function bio()
	{
		$this->load->view('nav');
		$this->load->view('bio');
	}
	
	function blog()
	{
		$this->load->view('nav');
		$this->load->view('blog');
	}
	
	function site_nav()
	{
		$this->load->view('nav');
		$this->load->view('site_nav');
	}
*/
	
	function another_page() // just for sample
	{
		echo 'good. you\'re logged in.';
	}
	
	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			echo 'You don\'t have permission to access this page. <a href="../login">Login</a>';	
			die();		
			//$this->load->view('login_form');
		}		
	}	

}
