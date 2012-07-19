<?php class Bio extends Controller {
	function __construct()
	{
		parent::Controller();
		$this->load->model('admin/bio_model');
		$this->is_logged_in();
	}
	
	function index()
	{
		$this->load->helper('form');
	
		$data['main_content'] = 'admin/bio';
		$data['title'] = 'STUFF the Magic Mascot | Update Bio Info | Content Management System';
		$data["bio_info"] = $this->bio_model->get_bio();
		$this->load->view('admin/includes/temp_full', $data);
	}
	
	public function save()
	{
			$this->load->helper('url');
			$postdata = array(
				'bio_title'	=> $this->input->post('bio_title'),
				'bio_text' => $this->input->post('bio_text'),
				'bio_button' => $this->input->post('bio_button'),
			);
			
			$this->bio_model->update($postdata);
			
			redirect('/bio', 'refresh');
	}
	
	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			echo 'You don\'t have permission to access this page. <a href="../">Login</a>';	
			die();		
		}
	}
}
?>