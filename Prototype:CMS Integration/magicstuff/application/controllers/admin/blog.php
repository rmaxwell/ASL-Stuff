<?php

class Blog extends Controller 
{
	function __construct()
	{
		parent::Controller();
/* 		$this->is_logged_in(); */
	}
	
	function index()
	{	
		$this->load->view('admin/includes/header');
		$this->load->view('admin/includes/nav');
		$this->load->view('admin/blog');
	}
}
?>