<?php

	class Blog extends Controller 
	{
		function __construct()
		{
			parent::Controller();
			$this->is_logged_in();
		}
		
		function index()
		{
			$this->load->model('blog_model');
			$data['blogs'] = $this->blog_model->getBlogs();
		
			$this->load->view('cms/nav');
			$this->load->view('blog/blog', $data);
			
		}

		
		function editBlog()
		{
			$this->load->model('blog_model');
			$blog_id = $this->uri->segment(3);
			
			$data['posts'] = $this->blog_model->getPosts($blog_id);
			
			$this->load->view('blog/post', $data);
			
			
			
			
			/* Get Post Data */
/*
			$data = array(
				'event_title' => ,
				'event_title' => ,
				'event_title' => ,
				'event_title' => 
			);
			
			$this->blog_model->saveThings();
*/
		}
		
		function back(){
			redirect('blog');
		}
		
		
		
		function is_logged_in()
		{
			$is_logged_in = $this->session->userdata('is_logged_in');
			if(!isset($is_logged_in) || $is_logged_in != true)
			{
				echo 'You don\'t have permission to access this page. <a href="../login">Login</a>';	
				die();		
				//$this->load->view('login_form');
			}		
		}
	}

?>