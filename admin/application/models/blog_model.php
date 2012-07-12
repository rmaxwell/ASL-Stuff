<?php

	class Blog_model extends Model {
		
		function getBlogs(){
			
			$query = $this->db->query('SELECT * FROM blogs');
			
			$theReturn = $query->result_array();
									
			return $theReturn;
		}
		
		function getPosts($id){
			$query = $this->db->query('SELECT * FROM posts where blog_id = '.$id);
			
			$theReturn = $query->result_array();
			
			return $theReturn;
		}
		
		
		
		
		
		
		
		function saveThings()
		{
			$data = array(
               'title' => $title,
               'name' => $name,
               'date' => $date
            );

			$this->db->where('id', $id);
			$this->db->update('mytable', $data); 
			
			// Produces:
			// UPDATE mytable 
			// SET title = '{$title}', name = '{$name}', date = '{$date}'
			// WHERE id = $id
		}
		
	}

?>