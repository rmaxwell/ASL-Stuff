<?php

class Nav extends Controller 
{
	function __construct()
	{
		parent::Controller();
		$this->load->model('nav_model');
 		$this->is_logged_in();
	}
	
	function index()
	{
		$this->load->view('includes/header');
		$this->load->helper('form');
		$data['title'] = 'Navagation Bar';
		$data['heading'] = "Update Navagation Bar Heading";
		$data['nav_data'] = $this->nav_model->get();
		$this->load->view('cms/nav');
		$this->load->view('nav', $data);
	}
	
	function save()
	{
		$this->load->helper('url');
		$passNavID = $this->input->post('nav_id');
		$postdata = array(
			'nav_id' => $this->input->post('nav_id'),
			'nav_url_link' => $this->input->post('nav_url_link'),
			'nav_url_name' => $this->input->post('nav_url_name'),			
			'nav_enable' => $this->input->post('nav_enable'.$passNavID)
		);
		
		$this->nav_model->update($postdata);

		//nav controller
		redirect('/nav', 'refresh');
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