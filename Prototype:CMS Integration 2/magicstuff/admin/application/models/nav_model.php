<?php
class Nav_model extends Model {

	public function __construct()
	{
		parent::Model();
		$this->load->database();
	}

	public function get()
	{
		//From database with table 'nav', col 'all'
		$query = $this->db->query('select * from nav;'); //$this->db->get('nav');
		return $query->result_array();
	}
	
	public function update($data)
	{
		$this->db->where('nav_id', $data['nav_id']);
		$this->db->update('nav', $data);
	}
}