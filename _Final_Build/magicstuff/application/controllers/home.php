<?php

class Home extends Controller {

	public function __construct(){
		parent::Controller();
		$this->load->model('site_model');
		$this->load->model('blog_model');
	}
	
	function index()
	{
		$data['slider_images']=$this->site_model->slider_images();
		$data["blog_info"] = $this->blog_model->getBlogs();
		$data["post_data"] = $this->blog_model->getFrontPagePosts(5);
		$data["new_images"] = $this->site_model->new_images();
		$this->load->view('home_set', $data);
	}
	
	function admin()
	{
		$this->load->view('admin/login_form');
	}

}