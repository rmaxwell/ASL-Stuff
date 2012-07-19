<?php class Nav extends Controller  {
	function __construct()
	{
		parent::Controller();
		$this->load->model('admin/nav_model');
 		$this->is_logged_in();
	}
	
	function index()
	{
		$this->load->helper('form');
	
		$data['main_content'] = 'admin/nav';
		$data['title'] = 'STUFF the Magic Mascot | Edit Nav | Content Management System';
		$data['nav_data'] = $this->nav_model->get();
		$this->load->view('admin/includes/temp_full', $data);
	}
	
	function save()
	{
		$this->load->helper('url');
		$passNavID = $this->input->post('nav_id');
		$postdata = array(
			'nav_id' => $this->input->post('nav_id'),
			'nav_url_link' => $this->input->post('nav_url_link'),
			'nav_url_name' => $this->input->post('nav_url_name'),			
			'nav_enable' => $this->input->post('nav_enable'.$passNavID)
		);
		
		$this->nav_model->update($postdata);

		//nav controller
		redirect('/nav', 'refresh');
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