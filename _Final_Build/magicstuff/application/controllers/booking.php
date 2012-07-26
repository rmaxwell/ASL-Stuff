<?php
class Booking extends Controller
{

	function __construct()
	{
		parent::Controller();
		$this->load->model('admin/book_model');
		$this->load->model('blog_model');
	}
	
	function index()
	{
		$data['book_data'] = $this->book_model->get();
		$data["blog_info"] = $this->blog_model->getBlogs();
		$this->load->view('booking', $data);		
	}

}
?>