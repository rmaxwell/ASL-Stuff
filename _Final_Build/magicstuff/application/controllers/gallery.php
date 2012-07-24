<?php

class Gallery extends Controller {

	public function __construct()
	{
		parent::Controller();
		$this->load->model('gallery_model');
		$this->load->helper('url');
		$this->load->helper('form');
	}
	
	function index()
	{
		$albums = $this->gallery_model->get_albums();
		$images_array = array();
		
		foreach($albums as $album){
			$images = $this->gallery_model->get_images($album['album_id']); 
			array_push($images_array, $images);
		}
		$data['main_content'] = '/gallery';
		$data['albums'] = $albums;
		$data['images_array'] = $images_array;
		$this->load->view('gallery', $data);
	}

}?>