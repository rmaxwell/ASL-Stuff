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
		$data['main_content'] = 'admin/videos';
		$data['title'] = 'STUFF the Magic Mascot | Update Videos | Content Management System';
		//$data['book_gallery'] = $this->book_model->get();
		$this->load->view('admin/includes/temp_full', $data);
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