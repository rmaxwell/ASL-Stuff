<?php

class Videos extends Controller 
{
	function __construct()
	{
		parent::Controller();
		$this->is_logged_in();
		$this->load->model('admin/video_model');
	}
	
	function index()
	{
		$videos = $this->video_model->get_videos();
	
		$data['main_content'] = 'admin/videos';//change for embed tag
		$data['title'] = 'STUFF the Magic Mascot | Update Videos | Content Management System';
		$data['videos'] = $videos; 
		$this->load->view('admin/includes/temp_full', $data);
	}
	
	public function add()
	{
		$video_titles = $this->video_model->get_videos();
		$video_title = $this->input->post('video_title');
		$video_embed = $this->input->post('video_embed');

		if($video_title == '' || $video_embed == '' ){
			redirect('admin/videos');
		}

		foreach($video_titles as $t){
			if($t['video_title'] == $video_title){
				redirect('admin/videos');
			}
		}
		$postdata = array(
					'video_title' => $video_title,
					'video_embed' => $video_embed,
				);
		
		$this->video_model->insert_video($postdata);
		redirect('admin/videos');
	}
	
	public function edit_video()
	{
		$vid = $this->uri->segment(4);
		$video = $this->video_model->get_videos($vid);
		var_dump($video);
		redirect('admin/videos');
	}
	
	public function delete_video(){
		$vid = $this->uri->segment(4);
		$this->video_model->delete_video($vid);
		
		redirect('admin/videos');		
	}
	
	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			redirect('admin');
			die();		
		}
	}
}
?>