<?php

class Gallery_model extends Model {

	public function __construct()
	{
		parent::Model();
		$this->load->database();
	}
	
	public function get_albums()
	{
		$query = $this->db->query('SELECT * FROM albums;');
		$results = $query->result_array();
		return $results;
	}
	
	public function get_images($album_id)
	{
		$query = $this->db->query('SELECT * FROM photos WHERE album_id ='.$album_id.';');
		$results = $query->result_array();
		return $results;
	}
}
?>