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
	
	public function get_album_title($album_id)
	{
		$query = $this->db->query('SELECT album_title, album_id FROM albums WHERE album_id ='.$album_id.';');
		$results = $query->result_array();
		return $results;
	}
	
	public function get_images($album_id)
	{
		$query = $this->db->query('SELECT * FROM photos WHERE album_id ='.$album_id.';');
		$results = $query->result_array();
		return $results;
	}
	
	public function get_image($image_id)
	{
		$query = $this->db->query('SELECT * FROM photos WHERE photo_id ='.$image_id.';');
		$results = $query->result_array();
		return $results;
	}
	
	public function update_image($row)
	{
		$query = $this->db->query('UPDATE photos SET photo_title ="'.$row['image_title'].'", date_uploaded = NOW() WHERE photo_id ='.$row['image_id'].';');
	}
	
	public function orientation($or, $image_id)
	{
		$query = $this->db->query('UPDATE photos SET orientation ='.$or.' WHERE photo_id ='.$image_id.';');
	}
	
	public function delete_album($album_id)
	{
		$query = $this->db->query('DELETE FROM photos WHERE album_id ='.$album_id.';');
		$query = $this->db->query('DELETE FROM albums WHERE album_id ='.$album_id.';');
	}
	
	public function delete_image($image_id)
	{
		$query = $this->db->query('DELETE FROM photos WHERE photo_id ='.$image_id.';');
	}
	
	public function insert_album($album_title)
	{
		$this->db->query('INSERT INTO albums (album_title, date_uploaded)
										value ("'.$album_title.'", NOW() );');
		return $this->db->insert_id();
	}
	
	public function insert_photos($row)
	{
		$this->db->query('INSERT INTO photos (album_id, photo_path, photo_tn, date_uploaded)
										value ("'.$row["album_id"].'","'.$row["photo_path"].'","'.$row["photo_tn"].'", NOW() );');
		return $this->db->insert_id();
	}
}
?>