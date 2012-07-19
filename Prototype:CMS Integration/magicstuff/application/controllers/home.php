<?php

class Home extends Controller {
	
	function index()
	{
		$this->load->view('home_set');		
	}
	
	function admin()
	{
		$this->load->view('admin/login_form');
	}

}