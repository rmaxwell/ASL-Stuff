<?php

class Gallery extends Controller 
{
	function __construct()
	{
		parent::Controller();
		$this->is_logged_in();
		$this->load->model('admin/gallery_model');
		$this->load->helper('url');
		$this->load->helper('form');
	}
	
	function index()
	{	
		$albums = $this->gallery_model->get_albums();
	
		$data['main_content'] = 'admin/albums';
		$data['title'] = 'Update Gallery';
		$data['album_title'] = $albums; 
		$this->load->view('admin/includes/temp_full', $data);
	}
	
	public function add()
	{ 
		$album_titles = $this->gallery_model->get_albums();
		$album_title = $this->input->post('newAlbum');
		
		$dir    = 'uploads/gallery/images/';
		$path = scandir($dir);
		$dirtn    = 'uploads/gallery/thumbs/';
		$pathtn = scandir($dirtn);
		
		if($album_title == ''){
			redirect('admin/gallery');
		}
		foreach($album_titles as $t){
			if($t['album_title'] == $album_title){
				redirect('admin/gallery');
			}
		}
		foreach($path as $p){
			if($p == strtolower($album_title)){
				redirect('admin/gallery');	
			}
		}		
		foreach($pathtn as $ptn){
			if($ptn == strtolower($album_title)){
				redirect('admin/gallery');	
			}
		}
		
		mkdir("uploads/gallery/images/".strtolower($album_title));
		mkdir("uploads/gallery/thumbs/".strtolower($album_title));
		
		$this->gallery_model->insert_album($album_title);
		redirect('admin/gallery');
	}
	
	public function load_album()
	{
		$this->load->library('session');
		$aid = $this->uri->segment(4);
		$images = $this->gallery_model->get_images($aid);
		$album = $this->gallery_model->get_album_title($aid);
		
		$data['title'] = 'Update Gallery';
		$data['heading'] = 'Update Gallery';
		$data['images'] = $images;
		$data['album'] = $album;
		
		$this->load->view('admin/includes/header', $data);
		$this->load->view('admin/includes/nav');
		$this->load->view('admin/gallery', $data);
		$this->load->view('admin/includes/footer');
	}
	
	public function upload()
	{	
		$images = $_FILES;	
		$an = $this->input->post('album_name');
		$album = $this->uri->segment(4);
		$image = $images['userfile']['type'][0];
		$orgpath = array();
		if($image == ''){	
			redirect('admin/gallery/load_album/'.$album);
		}else if($image == 'image/png' || $image == 'image/gif' || $image == 'image/jpg' || $image == 'image/jpeg'){
			for ($i=0; $i<count($images['userfile']['name']); $i++)
			{	
				$uploads_dir = 'uploads/gallery/';
				$tempfile = $images['userfile']["tmp_name"][$i];
				$name = $images['userfile']["name"][$i];
				$orgfile = "$uploads_dir/$name";
				move_uploaded_file($tempfile, $orgfile);
				
				$path = 'uploads/gallery/images/'.$an.'/'.$name;
				$pathtn = 'uploads/gallery/thumbs/'.$an.'/tn_'.$name;
								
				$this->imageResize($orgfile, $path);
				$this->imageThumb($orgfile, $pathtn);

				$postdata = array(
					'album_id' => $album,
					'photo_path' => $path,
					'photo_tn' => $pathtn,
				);
				$this->gallery_model->insert_photos($postdata);
				array_push($orgpath, $orgfile);
			}
		}else{
			redirect('admin/gallery/load_album/'.$album);
		}
			$this->remove_original($orgpath);
			redirect('admin/gallery/load_album/'.$album);
	}
	
 	public function imageResize($orgfile, $path) 
	{
		$ar = getimagesize($orgfile);
		if($ar['mime'] == 'image/gif'){
			$n = imagecreatefromgif($orgfile);
		}elseif($ar['mime'] == 'image/jpeg'){
			$n = imagecreatefromJPEG($orgfile);
		}elseif($ar['mime'] == 'image/png'){
			$n = imagecreatefrompng($orgfile);
		}
		$orgw = $ar[0];
		$orgh = $ar[1];
		$height = 450;
		
		$ratio = $height / $orgh;
		$width = $orgw * $ratio;
		
		if($width > 550){
			$width = 550;
			$ratio = $width / $orgw;
			$height = $orgh * $ratio;
		}
		
		$cont = imagecreatetruecolor( $width, $height);
		imagecopyresampled($cont, $n, 0, 0, 0, 0, $width, $height, $orgw, $orgh);
		imagejpeg($cont, $path ,100);
		imagedestroy($n);
	}
	
	public function imageThumb($orgfile, $pathtn)
	{	
		$ar = getimagesize($orgfile);
		
		if($ar['mime'] == 'image/gif'){
			$n = imagecreatefromgif($orgfile);
		}elseif($ar['mime'] == 'image/jpeg'){
			$n = imagecreatefromjpeg($orgfile);
		}elseif($ar['mime'] == 'image/png'){
			$n = imagecreatefrompng($orgfile);
		}
		
		$orgw = $ar[0];
		$orgh = $ar[1];
		$cont = imagecreatetruecolor(100, 150);
		imagecopyresampled($cont, $n, 0, 0, 0, 0, 100, 150, $orgw, $orgh);
		imagejpeg($cont, $pathtn ,100);
		imagedestroy($n);
	}
	
	public function remove_original($paths)
	{
		foreach($paths as $path){
			unlink($path);
		}
	}
	
	public function update_image()
	{
		$this->load->helper('url');
		$album = $this->uri->segment(4); 
		$postdata = array(
			'image_id' => $this->uri->segment(5),
			'image_title' => $this->input->post('image_title'),
		);
		$this->gallery_model->update_image($postdata);
		redirect('admin/gallery/load_album/'.$album, 'refresh');
	}
	
	public function delete_album()
	{
		$album_id = $this->uri->segment(4);
		$album_title = $this->uri->segment(5);
		$images = $this->gallery_model->get_images($album_id);
		$this->gallery_model->delete_album($album_id);
		$dir    = 'uploads/gallery/images/'.$album_title;
		$path = scandir($dir);
		$dirtn    = 'uploads/gallery/thumbs/'.$album_title;
		$pathtn = scandir($dirtn);
		
		for ($i=2; $i<count($path); $i++){
			unlink($dir.'/'.$path[$i]);
			unlink($dirtn.'/'.$pathtn[$i]);
		}
		rmdir($dir);
		rmdir($dirtn);
		redirect('admin/gallery');
	}
	
	public function delete_image()
	{
		$album = $this->uri->segment(4);	
		$image_id = $this->uri->segment(5);
		$image = $this->gallery_model->get_image($image_id);
		$this->gallery_model->delete_image($image_id);
		redirect('admin/gallery/load_album/'.$album, 'refresh');
	}

	public function is_logged_in()
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