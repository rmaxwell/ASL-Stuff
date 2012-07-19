<?PHP
	class Site_model extends Model {
		
		public function __construct()
		{
			parent::Model();
			$this->load->database();
		}
		
		public function get()
		{
			$this->db->where('id',1);
			$query = $this->db->get('home_content');
			return $query->result_array();
		}
		
		public function update($data)
		{
			$this->db->where('id', 1);
			$this->db->update('mainContent', $data);
		}
		
	}
?>