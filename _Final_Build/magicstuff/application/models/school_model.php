<?php
class School_model extends Model {

	public function __construct()
	{
		parent::Model();
		$this->load->database();
	}

	public function get()
	{
		$this->db->where('school_id',1);
		$query = $this->db->get('school_contacts');
		return $query->result_array();
	}
}
?>