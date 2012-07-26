<?php
class School extends Controller
{
	function __construct()
	{
		parent::Controller();
		$this->load->model('school_model');
		$this->load->model('blog_model');
	}
	
	function index()
	{
		$data['main_content'] = '/school';
		$data['title'] = "STUFF's School Show | STUFF the Magic Mascot";
		$data["school_info"] = $this->school_model->get();
		$data["blog_info"] = $this->blog_model->getBlogs();
		$this->load->view('school', $data);
	}
}
?>