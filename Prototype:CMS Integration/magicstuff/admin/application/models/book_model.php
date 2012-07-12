<?php
class Book_model extends Model {

	public function __construct()
	{
		parent::Model();
		$this->load->database();
	}

	public function get()
	{
		//$query = $this->db->get('booking_contacts');
		$this->db->where('booking_id',1);
		$query = $this->db->get('booking_contacts');
		return $query->result_array();
		
		/*
		if($query->num_rows == 1)
		{
			return $query;
		}
		*/
		//added to check if this 1 not working...
		//return $query;

	}
	
	public function update($data)
	{
		$this->db->where('booking_id', 1);
		$this->db->update('booking_contacts', $data);
	}
}