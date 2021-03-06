<?php

class Site extends Controller 
{
	function __construct()
	{
		parent::Controller();
		$this->load->model('admin/site_model');
		$this->is_logged_in();
	}
	
	function index()
	{
		$this->load->view('admin/includes/header');
		$this->load->helper('form');
		$data['title'] = 'Home';
		$data['heading'] = "Update Home Page";
		$data['site_data'] = $this->site_model->get();
		$this->load->view('admin/includes/nav');
		$this->load->view('admin/logged_in_area', $data);
		$this->load->view('admin/includes/footer');	
	}
	
	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			redirect('admin');
			die();		
		}		
	}	

}
?>
