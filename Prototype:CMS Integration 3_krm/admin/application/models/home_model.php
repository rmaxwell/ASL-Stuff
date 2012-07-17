<?php 
	class home_model extends Model {
	
		function upload_photo(){
		
		}
		
		function upload_mainContent(){
			$new_main_content = array(
				'main_content' => $this->input->post('main_content'),
			);
			
			$insert = $this->db->insert('home_content', $new_main_content);
			return $insert;
		}
	
	}
?>