<?php
class School extends Controller
{
	function __construct()
	{
		parent::Controller();
	}
	
	function index()
	{
		$data['main_content'] = '/school';
		$data['title'] = "STUFF's School Show | STUFF the Magic Mascot";
		//$data["blog_info"] = $this->blog_model->get_bio();
		$this->load->view('school', $data);
	}
	
	
}
?>