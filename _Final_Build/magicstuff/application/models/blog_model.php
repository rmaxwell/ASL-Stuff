<?php

	class Blog_model extends Model {

//BLOG METHODS		
		public function getBlogs()
		{
			$query = $this->db->query('SELECT * FROM blogs');
			$theReturn = $query->result_array();
			return $theReturn;
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
		
	}
?>