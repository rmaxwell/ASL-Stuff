<?php

class Video_model extends Model {

	public function __construct()
	{
		parent::Model();
		$this->load->database();
	}
	
	public function get_videos()
	{
		$query = $this->db->query('SELECT * FROM videos;');
		$results = $query->result_array();
		return $results;
	}
	
	public function get_video($vid)
	{
		$query = $this->db->query('SELECT * FROM videos WHERE video_id = '.$vid.';');
		$results = $query->result_array();
		return $results;
	}
	
	public function insert_video($row)
	{
		$this->db->query("INSERT INTO videos (video_title, video_embed) values ('".$row["video_title"]."','{$row['video_embed']}')");
		return $this->db->insert_id();
	}

	public function delete_video($video_id)
	{
		$query = $this->db->query('DELETE FROM videos WHERE video_id ='.$video_id.';');
	}
}
?>