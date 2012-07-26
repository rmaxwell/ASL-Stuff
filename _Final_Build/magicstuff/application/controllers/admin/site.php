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
		$data['slider_images'] = $this->site_model->slider_images();
		$data['main_content'] = 'admin/logged_in_area';
		$data['title'] = 'STUFF the Magic Mascot | Content Management System';
		$data['site_data'] = $this->site_model->get();		
		$this->load->view('admin/includes/temp_full', $data);
	}
	
	public function upload()
	{	
		$image = $_FILES;	
		$img = $this->uri->segment(4);
		$image_name = $this->input->post('image_number');
		$onoff = $this->input->post('link');
		$page = $this->input->post('page_all');
		
		if($onoff == 1){
			if($page == '0'){
				$url = $this->input->post('url_path');
				$slider_path = '<a href="'.$url.'"><img src="'.base_url().'uploads/home/images/'.$image_name.'"></a>';
			}else if($page == '1'){
				$slider_path = '<img src="'.base_url().'uploads/home/images/'.$image_name.'">';
 			}else{
				$slider_path = '<a href="'.base_url().$page.'"><img src="'.base_url().'uploads/home/images/'.$image_name.'"></a>';
			}
		}else{
			$slider_path = '<img src="'.base_url().'uploads/home/images/'.$image_name.'">';
		}

		if($image['userfile']['type'] == ''){	
			redirect('admin');
		}else if($image['userfile']['type'] == 'image/png' || $image['userfile']['type'] == 'image/gif' || $image['userfile']['type'] == 'image/jpg' || $image['userfile']['type'] == 'image/jpeg'){

			$uploads_dir = 'uploads/home/';
			$tempfile = $image['userfile']["tmp_name"];
			$name = $image['userfile']["name"];
			$orgfile = "$uploads_dir/$name";
			move_uploaded_file($tempfile, $orgfile);
			
			$path = 'uploads/home/images/'.$image_name;
			$pathtn = 'uploads/home/thumbs/tn_'.$image_name;
							
			$this->imageResize($orgfile, $path);
			$this->imageThumb($orgfile, $pathtn);

		}else{
			redirect('admin');
		}
			$postdata = array(
					'id' => $img,
					'slider_path' => htmlentities($slider_path),
				);
		$this->site_model->update_slider($postdata);
		$this->remove_original($orgfile);
		redirect('admin');


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
		$cont = imagecreatetruecolor( 960, 406);
		imagecopyresampled($cont, $n, 0, 0, 0, 0, 960, 406, $orgw, $orgh);
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
		$cont = imagecreatetruecolor(236, 100);
		imagecopyresampled($cont, $n, 0, 0, 0, 0, 236, 100, $orgw, $orgh);
		imagejpeg($cont, $pathtn ,100);
		imagedestroy($n);
	}
	
	public function turnoff_slider()
	{
		$img = $this->uri->segment(4);
		$this->site_model->slider_image_off($img);
		redirect('admin');
	}
	
	public function remove_original($path)
	{
		unlink($path);
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
