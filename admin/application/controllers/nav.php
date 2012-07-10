<?php

class Nav extends Controller 
{
	function __construct()
	{
		parent::Controller();
/* 		$this->is_logged_in(); */
	}
	
	function index()
	{
		$this->load->view('cms/nav');
		$this->load->view('nav');
	}
}
?>