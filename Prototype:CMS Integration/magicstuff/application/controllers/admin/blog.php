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
		//$this->load->helper('form');
	
		$data['main_content'] = 'admin/blog';
		$data['title'] = 'STUFF the Magic Mascot | Update Blog Info | Content Management System';
		//$data["blog_info"] = $this->blog_model->get_bio();
		$this->load->view('admin/includes/temp_full', $data);
	}
}
?>