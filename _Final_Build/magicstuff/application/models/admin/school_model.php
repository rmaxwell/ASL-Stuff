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
	
	public function update($row)
	{
		$query = $this->db->query('UPDATE school_contacts SET school_phone ="'.$row['school_phone'].'", school_textarea = "'.$row['school_textarea'].'", school_email = "'.$row['school_email'].'", date_updated = NOW() WHERE school_id = 1;');
	}
}
?>