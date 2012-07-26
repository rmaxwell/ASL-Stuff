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
		
		public function deleteBlog($id)
		{
			$this->db->delete('blogs', array('blog_id' => $id)); 
			return 1;
		}
		
		public function showBlog($blog_id)
		{
			$seletQue = $this->db->query('SELECT blog_visible FROM blogs WHERE blog_id = '.$blog_id);
			$results = $seletQue->result_array();
			
			if($results[0]['blog_visible'] == 1){
				$this->db->query('UPDATE blogs SET blog_visible = 0 WHERE blog_id = '.$blog_id);
			}else{
				$this->db->query('UPDATE blogs SET blog_visible = 1 WHERE blog_id = '.$blog_id);
			}
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
		
		public function getThumbs($id)
		{
			$query = $this->db->query('SELECT * FROM thumbnails where post_id = '.$id);
			$theReturn = $query->result_array();
			return $theReturn;
		}
		
		public function addPost($data)
		{
			if(array_key_exists('post_photo_path', $data)){
				$path_col = 'post_photo_path,';
				$path_val = '"'.$data["post_photo_path"].'",';
			}else{
				$path_col = '';
				$path_val = '';
			}
			
			$this->db->query('INSERT INTO posts (blog_id, post_title, post_desc, post_photo_title, '.$path_col.' date_updated)
			VALUES ("'.$data["blog_id"].'", "'.$data["post_title"].'", "'.$data["post_desc"].'", "'.$data["post_photo_title"].'", '.$path_val.' NOW() );');
			
			$newPost = $this->db->query('SELECT post_id FROM posts ORDER BY date_updated DESC LIMIT 1;');
			$pid = $newPost->row_array();
			
			return $pid['post_id'];
		}
		
		public function updatePost($data, $id)
		{
			$photo = '';
		
			if(array_key_exists('post_photo_path', $data)){
				$photo = ', post_photo_path = "'.$data['post_photo_path'].'"';
			}
			
			$this->db->query('UPDATE posts
			SET post_title = "'.addslashes($data['post_title']).'", post_desc = "'.addslashes($data['post_desc']).'", post_photo_title = "'.$data['post_photo_title'].'", date_updated = NOW()'.$photo.' WHERE post_id = '.$id.';');
			
			return 1;
		}
		
		public function deletePost($id)
		{
			$this->db->where('post_id', $id);
			$this->db->delete('posts');
		}
		
		public function thumbUpload($imgPath, $tnPath, $id)
		{
			$this->db->query('INSERT INTO thumbnails (image_path, thumbnail_path, post_id) values ("'.$imgPath.'", "'.$tnPath.'", "'.$id.'");');
		}
		
		public function upload($post_id)
		{
			$image = $_FILES;
			$whitman = $image['album']['name'][0];
						
			$config['upload_path'] = 'images/blog/posts/original';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['overwrite'] = true;
			$config['max_size']	= '1000000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			
			if ( !$this->upload->do_upload() )
			{
				$error = array('error' => $this->upload->display_errors());
/* 				var_dump($error); */
			}else{
			
				$data = array('upload_data' => $this->upload->data());
				$path = $data{'upload_data'}{'full_path'};
				$filename = $data['upload_data']['file_name'];
				$fileType = $data['upload_data']['file_type'];
				
				$this->imageResize($path, $filename, $fileType);
				$this->imageThumb($path, $filename, $fileType);
			}
			
			if($whitman != ''){
				$folderDate = date('Ymd');
				
				$orgFolder = 'images/blog/albums/original/'.$folderDate.'/';
				$resizeFolder = 'images/blog/albums/resize/'.$folderDate.'/';
				$thumbFolder = 'images/blog/albums/thumb/'.$folderDate.'/';
				
				if(!is_dir($orgFolder)){
					mkdir($orgFolder, 0777);
				};
				
				if(!is_dir($resizeFolder)){
					mkdir($resizeFolder, 0777);
				};
				
				if(!is_dir($thumbFolder)){
					mkdir($thumbFolder, 0777);
				};
									
				for ($i=0; $i<count($image['album']['name']); $i++)
				{	
					$uploads_dir = 'images/blog/albums/original/'.$folderDate.'/';
					$tempfile = $image['album']["tmp_name"][$i];
					$name = $image['album']["name"][$i];
					$orgfile = $uploads_dir.$name;
					$type = $image['album']["type"][$i];
					
					var_dump($image['album']["size"][$i]);
						
/* 						move_uploaded_file($tempfile, $orgfile); */
					
					
					$thumb = base_url().$thumbFolder.'tn_'.date('Ymd').$name;
					$resize = base_url().$resizeFolder.date('Ymd').$name;
					
					$this->thumbUpload($resize, $thumb, $post_id);

					$this->imageResize($orgfile, $name, $type, $resizeFolder);
					$this->imageThumb($orgfile, $name, $type, $thumbFolder);
				}
			}
		}
		
		public function imageResize($orgfile, $fn, $fileType, $imgPath='images/blog/posts/resize/')
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
		
		public function imageThumb($orgfile, $fn, $fileType, $imgPath='images/blog/posts/thumb/')
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