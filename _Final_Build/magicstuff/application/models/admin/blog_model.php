<?php

	class Blog_model extends Model {

//BLOG METHODS		
		public function getBlogs()
		{
			$query = $this->db->query('SELECT * FROM blogs');
			$theReturn = $query->result_array();
			return $theReturn;
		}
		
		public function addBlog($title)
		{
			$data = array('blog_title' => $title);
			$this->db->insert('blogs', $data);
			return 1;
		}
		
		public function editTitle($title, $id)
		{
			$info = array(
				'blog_title' => $title
			);
		
			$this->db->where('blog_id', $id);
			$this->db->update('blogs', $info);	
		}
		
		public function deleteBlog($id)
		{
			$this->db->delete('blogs', array('blog_id' => $id)); 
			return 1;
		}
		
		public function showBlog($blog_id)
		{
			$this->db->query('UPDATE blogs SET blog_visible = 0');
			$this->db->query('UPDATE blogs SET blog_visible = 1 WHERE blog_id = '.$blog_id);
			
			redirect('admin/blog');
		}


//POST METHODS		
		public function getPosts($id)
		{
			$query = $this->db->query('SELECT * FROM blogs LEFT JOIN posts on blogs.blog_id = posts.blog_id where blogs.blog_id = '.$id);
			$theReturn = $query->result_array();
			return $theReturn;
		}
		
		public function getPost($id)
		{
			$query = $this->db->query('SELECT * FROM posts where posts.post_id = '.$id);
			$theReturn = $query->row();
			return $theReturn;
		}
		
		public function addPost($data)
		{

			$this->db->query('INSERT INTO posts (blog_id, post_title, post_desc, date_updated)
			VALUES ("'.$data["blog_id"].'", "'.$data["post_title"].'", "'.$data["post_desc"].'", NOW() );');
			
			$newPost = $this->db->query('SELECT post_id FROM posts ORDER BY date_updated DESC LIMIT 1;');
			$pid = $newPost->row_array();
			
			return $pid['post_id'];
		}
		
		
		public function updatePost($data, $id)
		{
			$this->db->query('UPDATE posts
			SET post_title = "'.addslashes($data['post_title']).'", post_desc = "'.addslashes($data['post_desc']).'", date_updated = NOW() WHERE post_id = '.$id.';');
			
			return 1;
		}
		
		public function deletePost($id)
		{
			$this->db->where('post_id', $id);
			$this->db->delete('posts');
		}
		
		
		public function getSlots($id)
		{
			$query = $this->db->query('SELECT * FROM post_slots WHERE post_id = '.$id.' ORDER BY position ASC;');
			$theReturn = $query->result_array();
			return $theReturn;
		}
	
/*	*** table NAME and COLUMN NAMES ***
	TABLE `post_slots`
	  `post_slot_id`
	  `post_id`
	  `image_thumb`
	  `image_main`
	  `video_link`
	  `content_is`
	  `position`
	*/

/* Step One: Check to see if slot_id ISSET */
/* Step Two-A: If database returns NOTHING then do an INSERT */
/* Step Two-B: If database returns SOMETHING then do an UPDATE */
		/* If $data has an image, then add IMAGE to QUERY. Also change video link to EMPTY STRING */
		/* Else add Video link to QUERY and give image an EMPTY STRING */
/* Step Three: redirect() to POST currently updating */

/* this is what save sees */ 
/* 				array(4) { 
					["content"]=> string(5) "photo"
					["emb_tag"]=> string(9) "opadsfaid"
					["post_id"]=> string(2) "95"
					["position"]=> string(1) "1"
				}
				
				array(1) { 
					["photo_path"]=> array(5) { 
						["name"]=> string(13) "Boardwalk.jpg" 
						["type"]=> string(10) "image/jpeg"
						["tmp_name"]=> string(36) "/Applications/MAMP/tmp/php/phpcVa5Y8"
						["error"]=> int(0)
						["size"]=> int(78821) 
					} 
				}
*/		public function slotSave($data)
		{
			$imageArray = array();
			if(array_key_exists('userfile', $data)) $imageArray = $data['userfile'];
						
			$imageColumn = '';
			$imageValue = '';
			$videoColumn = '';
			$videoValue = '';
							
			if(array_key_exists('emb_tag', $data)){
				$videoColumn = ' video_link';
				$videoValue = $data["emb_tag"];
			}else{
				$thumbnail = base_url().'images/blog/thumb/'.date('Ymd').$imageArray["name"];
				$imagepath = base_url().'images/blog/resize/'.date('Ymd').$imageArray["name"];
						
				$imageColumn = ' image_thumb, image_main';
				$imageValue = $thumbnail."', '".$imagepath;
				
			}
								
			$que = $this->db->query("INSERT INTO post_slots (post_id, content_is, position, last_updated, ".$videoColumn.$imageColumn.")
									VALUES ( '".$data['post_id']."', '".$data['content_is']."', '".$data['position']."', NOW(), '".$videoValue.$imageValue."' );");			
		}
		
/* Step One: is content a PHOTO or VIDEO? */
/* Step Two: empty the other CONTENT fields */
		public function slotUpdate($data)
		{
			$info = array(
				'content_is' => $data['content_is']
			);
			$imageArray = array();
			
			if(array_key_exists('userfile', $data)) $imageArray = $data['userfile'];
							
			if($data['content_is'] == 'video'){
				$info['video_link'] = $data["emb_tag"];
				$info['image_thumb'] = '';
				$info['image_main'] = '';
			}else{
				$info['video_link'] = '';
				$info['image_thumb'] = base_url().'images/blog/thumb/'.date('Ymd').$imageArray["name"];
				$info['image_main'] = base_url().'images/blog/resize/'.date('Ymd').$imageArray["name"];
			}

			$this->db->where('post_slot_id', $data['post_slot_id']);
			$this->db->update('post_slots', $info);	
		}
		
		public function slotDelete($id)
		{
			$this->db->where('post_slot_id', $id);
			$this->db->delete('post_slots');
		}
		
		public function upload($slot)
		{						
			$config['upload_path'] = 'images/blog/original';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['overwrite'] = true;

			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			
			if ( !$this->upload->do_upload() )
			{
				$error = array('error' => $this->upload->display_errors());
/* 				var_dump($error); */

				$this->session->set_userdata('blog', $this->upload->display_errors());
				$this->session->set_userdata('slot', $slot);
			}else{
			
				$data = array('upload_data' => $this->upload->data());
				$path = $data{'upload_data'}{'full_path'};
				$filename = $data['upload_data']['file_name'];
				$fileType = $data['upload_data']['file_type'];
				
				$this->imageResize($path, $filename, $fileType);
				$this->imageThumb($path, $filename, $fileType);
				
/* 				var_dump($data); */
			}

		}
		
		public function imageResize($orgfile, $fn, $fileType, $imgPath='images/blog/resize/')
		{
			if($fileType == 'image/gif'){
				$n = imagecreatefromgif($orgfile);
			}elseif($fileType == 'image/jpeg'){
				$n = imagecreatefromjpeg($orgfile);
			}elseif($fileType == 'image/png'){
				$n = imagecreatefrompng($orgfile);
			}
			
			$ar = getimagesize($orgfile);
			$orgw = $ar[0];
			$orgh = $ar[1];
			
			$cont = imagecreatetruecolor(460, 280);
			imagecopyresampled($cont, $n, 0, 0, 0, 0, 460, 280, $orgw, $orgh);
			imagejpeg($cont, $imgPath.date('Ymd').$fn , 100);
			imagedestroy($n);
		}
		
		public function imageThumb($orgfile, $fn, $fileType, $imgPath='images/blog/thumb/')
		{
			if($fileType == 'image/gif'){
				$n = imagecreatefromgif($orgfile);
			}elseif($fileType == 'image/jpeg'){
				$n = imagecreatefromjpeg($orgfile);
			}elseif($fileType == 'image/png'){
				$n = imagecreatefrompng($orgfile);
			}
			
			$ar = getimagesize($orgfile);
			$orgw = $ar[0];
			$orgh = $ar[1];
			
			$cont = imagecreatetruecolor(50, 50);
			imagecopyresampled($cont, $n, 0, 0, 0, 0, 50, 50, $orgw, $orgh);
			imagejpeg($cont, $imgPath.'tn_'.date('Ymd').$fn  ,100);
			imagedestroy($n);
		}
		
		
		public function deleteThumb($id)
		{
			$this->db->where('thumbnail_id', $id);
			$this->db->delete('thumbnails');
		
			return 1;
		}
		

		
		
		
	}// END OF FILE

?>