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
		
		public function slider_images()
		{
			$query = $this->db->query('SELECT * FROM home_content;');
			$results = $query->result_array();
			return $results;
		}
		
		public function update_slider($row)
		{
			$query = $this->db->query('UPDATE home_content SET on_off = 1, path ="'.$row['slider_path'].'", date_uploaded = NOW() WHERE id ='.$row['id'].';');
		}
		
		public function slider_image_off($img)
		{
			$query = $this->db->query('UPDATE home_content SET on_off = 0, date_uploaded = NOW() WHERE id ='.$img.';');
		}
	}
?>