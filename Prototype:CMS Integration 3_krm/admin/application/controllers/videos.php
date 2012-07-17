<?php

class Videos extends Controller 
{
	function __construct()
	{
		parent::Controller();
/* 		$this->is_logged_in(); */
	}
	
	function index()
	{
		$this->load->view('includes/header');
		$this->load->view('cms/nav');
		$this->load->view('videos');
	}
}
?>