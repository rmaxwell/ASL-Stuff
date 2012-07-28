<?php

	class Blog extends Controller 
	{
		protected $blog_id = '';

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
			}elseif($post_id == 'editTitle'){
				$title = mysql_escape_string($_POST['blog_title']);
				$this->blog_model->editTitle($title, $blog_id);
				redirect('admin/blog/editBlog/'.$blog_id);
			}elseif($post_id == 'addPost'){
			
				$title = $_POST['event_title'];
				$desc = $_POST['post_desc'];
				
				if($title != '' && $desc != ''){
					$newPost = array(
						'blog_id' => $blog_id,
						'post_title' => $title,
						'post_desc' => $desc,
					);
					
					if($title != '' || $desc != ''){
						$newID = $this->blog_model->addPost($newPost);
					}
					
					redirect('admin/blog/editBlog/'.$blog_id);
				}else{
				
					// For error handling if Title and Desc are empty
/* 					echo '<fieldset><legend><strong><h3>Error</h3></strong></legend><div>Please enter a valid Title and Description</div></fieldset>'; */
				}
					
			}elseif($post_id == 'updatePost'){
				
				$bid = $this->uri->segment(4);
				$pid = $this->uri->segment(6);
				
				$title = $_POST['event_title'];
				$desc = $_POST['post_desc'];
			
				$updatePost = array(
					'post_title' => $title,
					'post_desc' => $desc
				);
				
				$this->blog_model->updatePost($updatePost, $pid);
				redirect('admin/blog/editBlog/'.$bid.'/'.$pid);
				
			}elseif($post_id == 'deletePost'){
				$delete_id = $this->uri->segment(6);
				$this->blog_model->deletePost($delete_id);
				redirect('admin/blog/editBlog/'.$blog_id);
			}elseif($post_id == 'saveSlot'){
				$bid = $this->uri->segment(4);

				$this->load->model('admin/blog_model');

				$slotData = array(
					'post_id' => $_POST['post_id'],
					'position' => $_POST['position'],
					'content_is' => $_POST['content']
				);
				
				$imagetest = '';
				$videotest = '';
				
				$videotest = $_POST['emb_tag'];
				$imagetest = $_FILES['userfile']['name'];				
				
				if($_POST['content'] == 'photo' && $imagetest != ''){
				
					$slotData['userfile'] = $_FILES['userfile'];
					$this->blog_model->slotSave($slotData);
					$this->blog_model->upload($_POST['position']);
					
				}elseif($_POST['content'] == 'video' && $videotest != ''){
				
					//change code tags into ENTITIES
					$videoLink = $_POST['emb_tag'];
					$videoLink = str_replace('<', '&lt;', $videoLink);
					$videoLink = str_replace('>', '&gt;', $videoLink);
					$videoLink = str_replace('560', '460', $videoLink);
					$videoLink = str_replace('315', '280', $videoLink);
				
					$slotData['emb_tag'] = $videoLink;
				
					$this->blog_model->slotSave($slotData);
					$this->blog_model->upload($_POST['position']);
					
				}	
				
				$pid = $_POST['post_id'];
				redirect('admin/blog/editBlog/'.$blog_id.'/'.$pid);

			}elseif($post_id == 'updateSlot'){

				$this->load->model('admin/blog_model');

				$slotData = array(
					'post_slot_id' => $_POST['slot_id'],
					'content_is' => $_POST['content']
				);
				
				$videotest = '';
				$imagetest = '';
				
				$videotest = $_POST['emb_tag'];
				$imagetest = $_FILES['userfile']['name'];
				
				if($_POST['content'] == 'photo' && $imagetest != ''){
				
					$slotData['userfile'] = $_FILES['userfile'];
					//Update current SLOT
					$this->blog_model->slotUpdate($slotData);
					$this->blog_model->upload($_POST['position']);
					
				}elseif($_POST['content'] == 'video' && $video != ''){
				
					//change code tags into ENTITIES
					$videoLink = $_POST['emb_tag'];
					$videoLink = str_replace('<', '&lt;', $videoLink);
					$videoLink = str_replace('>', '&gt;', $videoLink);
					$videoLink = str_replace('560', '460', $videoLink);
					$videoLink = str_replace('315', '280', $videoLink);
				
					$slotData['emb_tag'] = $videoLink;
					//Update current SLOT then Upload and Resize photos
					$this->blog_model->slotUpdate($slotData);
					$this->blog_model->upload($_POST['position']);
				}	

				if($videotest != '' || $imagetest != ''){	
										
				}
				
				$bid = $this->uri->segment(4);
				$pid = $_POST['post_id'];

				redirect('admin/blog/editBlog/'.$bid.'/'.$pid);


			}elseif($post_id == 'deleteSlot'){
					$slot_id = $_POST['slot_id'];
					$pid = $_POST['post_id'];

					if(isset($slot_id)){
						$blog_id = $this->uri->segment(4);
					
						$this->blog_model->slotDelete($slot_id);
						
						redirect('admin/blog/editBlog/'.$blog_id.'/'.$pid);
					}else{
						redirect('admin/blog/editBlog/'.$blog_id.'/'.$pid);
					}
			}else{
				$data['postData'] = $this->blog_model->getPost($post_id);
				$data['slots'] = $this->blog_model->getSlots($post_id);

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