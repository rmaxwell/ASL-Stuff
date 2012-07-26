<?php

class School extends Controller 
{
	function __construct()
	{
		parent::Controller();
		$this->load->model('admin/school_model');
		$this->is_logged_in();
		$this->load->helper('form');
		$this->load->helper('url');
	}
	
	function index()
	{
		$data['main_content'] = 'admin/school';
		$data['title'] = 'STUFF the Magic Mascot | Update Booking Info | Content Management System';
		$data['school_data'] = $this->school_model->get();
		$this->load->view('admin/includes/temp_full', $data);
	}
	
	function save()
	{
		$postdata = array(
			'school_textarea' => $this->input->post('school_textarea'),
			'school_phone' => $this->input->post('school_phone'),
			'school_email' => $this->input->post('school_email'),
		);
		
		$this->school_model->update($postdata);
		redirect('admin/school', 'refresh');
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