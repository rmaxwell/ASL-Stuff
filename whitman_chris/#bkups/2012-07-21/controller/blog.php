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
			$this->load->view('admin/includes/header');

			$this->load->model('admin/blog_model');
			$data['blogs'] = $this->blog_model->getBlogs();
			$this->load->view('admin/includes/nav');
			$this->load->view('admin/blog/blog', $data);
			
			$this->load->view('admin/includes/footer');
/*
		// Kevin's Shit
			$this->load->model('admin/blog_model');
			$data['blogs'] = $this->blog_model->getBlogs();
			
			$data['main_content'] = 'admin/blog/blog';
			$data['title'] = 'STUFF the Magic Mascot | Update Blog Info | Content Management System';
		
			$this->load->view('admin/includes/temp_full', $data);
*/
		}
		
		function addBlog()
		{
			$this->load->model('admin/blog_model');
			$blog_title = $this->input->post('new_blog');
			$this->blog_model->addBlog($blog_title);
			redirect('admin/blog');
		}
		
		function editBlog()
		{
			$this->load->model('admin/blog_model');
			$blog_id = $this->uri->segment(4);
			
			$post_id = $this->uri->segment(5);
						
			$data['posts'] = $this->blog_model->getPosts($blog_id);
			$data['blog_id'] = $blog_id;
			$data['error'] = 0;
			
			//[VIEWS]
			$this->load->view('admin/includes/header');
			$this->load->view('admin/includes/nav');

			$this->load->view('admin/blog/post', $data);

			if(!$post_id){
				$this->load->view('admin/blog/post_form', $data);
			}elseif($post_id == 'addPost'){
			
				$title = $_POST['event_title'];
				$path = base_url().'images/blog/posts/resize/'.date('Ymd').$_FILES["userfile"]["name"];
				$photo_title = $_POST['photo_title'];
				$desc = $_POST['post_desc'];
				
				$thumbs = $_FILES['album'];
				$thumbCount = $thumbs['name'][0];
				
				if($title != '' && $desc != ''){
					$newPost = array(
						'blog_id' => $blog_id,
						'post_title' => $title,
						'post_photo_title' => $photo_title,
						'post_desc' => $desc,
					);
					
					if($path != '' || $thumbCount != ''){
					
						if($path != ''){
							$newPost['post_photo_path'] = $path;	
						}
						
						if($thumbCount != ''){
							$newPost['thumbnails'] = $thumbs;
						}
					}
										
					$this->blog_model->upload();
					$this->blog_model->addPost($newPost);
					
					redirect('admin/blog/editBlog/'.$blog_id);
				}else{
					echo '<fieldset><legend><strong><h3>Error</h3></strong></legend><div>Please enter a valid Title and Description</div></fieldset>';
				}
					
			}elseif($post_id == 'updatePost'){
				
				$title = $_POST['event_title'];
				$path = base_url().'images/blog/posts/resize/'.date('Ymd').$_FILES["userfile"]["name"];
				$photo_title = $_POST['photo_title'];
				$desc = $_POST['post_desc'];
			
				$updatePost = array(
					'post_title' => $title,
					'post_photo_title' => $photo_title,
					'post_desc' => $desc,
				);

				if($_FILES['userfile']['name'] != ''){
					$updatePost['post_photo_path'] = $path;
					
					$this->blog_model->upload();
				}
				
				$bid = $this->uri->segment(4);
				$pid = $this->uri->segment(6);
				
				$this->blog_model->updatePost($updatePost, $pid);
				redirect('admin/blog/editblog/'.$bid.'/'.$pid);
				
			}elseif($post_id == 'deletePost'){
				$delete_id = $this->uri->segment(6);
				$this->blog_model->deletePost($delete_id);
				redirect('admin/blog/editBlog/'.$blog_id);
			}else{
				$data['postData'] = $this->blog_model->getPost($post_id);
				$this->load->view('admin/blog/post_form', $data);
			}
			
			$this->load->view('admin/includes/footer');
		}
		
		function deleteBlog()
		{
			$this->load->model('admin/blog_model');
			$blog_id = $this->uri->segment(4);
			$this->blog_model->deleteBlog($blog_id);
			redirect('admin/blog');
		}
		
		function visibility()
		{
			$this->load->model('admin/blog_model');
			$blog_id = $this->uri->segment(4);
			$this->blog_model->showBlog($blog_id);
		}
		
		function back(){
			redirect('admin/blog');
		}
		
		function is_logged_in()
		{
			$is_logged_in = $this->session->userdata('is_logged_in');
			if(!isset($is_logged_in) || $is_logged_in != true)
			{
				redirect('admin');
			}		
		}
	}

?>