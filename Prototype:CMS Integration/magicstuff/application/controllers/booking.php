<?php
class Booking extends Controller
{

	function __construct()
	{
		parent::Controller();
		$this->load->model('admin/book_model');
	}
	
	function index()
	{
		$data['book_data'] = $this->book_model->get();
		$this->load->view('booking', $data);		
	}

}
?>