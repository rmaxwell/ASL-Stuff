<?PHP
	class Site_model extends Model {
		
		public function __construct()
		{
			parent::Model();
			$this->load->database();
		}
		
		public function slider_images()
		{
			$query = $this->db->query('SELECT * FROM home_content WHERE on_off = 1;');
			$results = $query->result_array();
			return $results;
		}
		
		public function new_images()
		{
			$query = $this->db->query('SELECT * FROM photos WHERE orientation = 0 ORDER BY date_uploaded DESC LIMIT 2 ;');
			$results = $query->result_array();
			return $results;
		}
	}
?>