<?php
class Book_model extends Model {

	public function __construct()
	{
		parent::Model();
		$this->load->database();
	}

	public function get()
	{
		$this->db->where('booking_id',1);
		$query = $this->db->get('booking_contacts');
		return $query->result_array();
	}
	
	public function update($data)
	{
		$this->db->where('booking_id', 1);
		$this->db->update('booking_contacts', $data);
	}
}
?>