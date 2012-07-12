<?php

class Booking extends Controller 
{
	function __construct()
	{
		parent::Controller();
		$this->load->model('book_model');

/* 		$this->is_logged_in(); */
	}
	
	function index()
	{
		$this->load->helper('form');
		$data['title'] = 'Booking';
		$data['heading'] = "Update Booking Page's Info";
		$data['book_data'] = $this->book_model->get();
		$this->load->view('cms/nav');
		$this->load->view('booking', $data);
	}
	
	function save()
	{
		$this->load->helper('url');
		$postdata = array(
			'booking_textarea' => $this->input->post('booking_textarea'),
			'booking_phone' => $this->input->post('booking_phone'),
			'booking_email' => $this->input->post('booking_email'),			
			'booking_image1' => $this->input->post('booking_image1'),
			'booking_image2' => $this->input->post('booking_image2'),					
			'booking_image3' => $this->input->post('booking_image3'),
			'booking_image4' => $this->input->post('booking_image4')
		);
		
		$this->book_model->update($postdata);

		//booking controller
		redirect('/booking', 'refresh');
	}
}
?>