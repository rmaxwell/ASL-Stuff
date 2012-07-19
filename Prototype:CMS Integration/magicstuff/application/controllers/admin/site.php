<?php class Site extends Controller {
	function __construct()
	{
		parent::Controller();
		$this->load->model('admin/site_model');
		$this->is_logged_in();
	}
	
	function index()
	{
		$this->load->helper('form');
		
		$data['main_content'] = 'admin/logged_in_area';
		$data['title'] = 'STUFF the Magic Mascot | Content Management System';
		$data['site_data'] = $this->site_model->get();		
		$this->load->view('admin/includes/temp_full', $data);
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
