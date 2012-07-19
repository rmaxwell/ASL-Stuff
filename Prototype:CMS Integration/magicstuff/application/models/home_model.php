<?php 
	class admin_model extends Model {
	
		function index()
		{
			echo 'eorkr';
		}
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