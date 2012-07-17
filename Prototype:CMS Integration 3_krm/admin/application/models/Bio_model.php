<?php

class Bio_model extends Model
{
	
	public function __construct()
	{
		parent::Model();
		$this->load->database();
	}
	
	public function get_bio()
	{
		$this->db->where('bio_id', 1);
		$query = $this->db->get('bio');
		return $query->result_array();
	}
	
	public function insert($row)
	{
		$this->db->insert('bio', $row);
		return $this->db->insert_id();
	}
	
	public function update($row)
	{
		$this->db->where('bio_id', 1);
		$this->db->update('bio', $row);
	}
}

?>