<?php

class Bio extends Controller 
{
	function __construct()
	{
		parent::Controller();
		$this->load->model('bio_model');
/* 		$this->is_logged_in(); */
	}
	
	function index()
	{
		$this->load->view('includes/header');
		$this->load->helper('form');
		$data['title'] = 'Update Bio Info';
		$data['heading'] = 'Update Bio';
		$data["bio_info"] = $this->bio_model->get_bio();
		$this->load->view('cms/nav');
		$this->load->view('bio', $data);
	}
	
	public function save()
	{
			$this->load->helper('url');
			$postdata = array(
				'bio_title'	=> $this->input->post('bio_title'),
				'bio_text' => $this->input->post('bio_text'),
				'bio_button' => $this->input->post('bio_button'),
			);
			
			$this->bio_model->update($postdata);
			
			redirect('/bio', 'refresh');
	}
}
?>