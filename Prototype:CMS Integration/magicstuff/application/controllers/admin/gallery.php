<?php

class Gallery extends Controller 
{
	function __construct()
	{
		parent::Controller();
		$this->is_logged_in();
	}
	
	function index()
	{
		$data['title'] = 'Update Gallery';
		$data['heading'] = 'Update Gallery';
		$this->load->view('admin/includes/header', $data);
		$this->load->view('admin/includes/nav');
		$this->load->view('admin/gallery', $data);
		$this->load->view('admin/includes/footer');
	}
	
	function add()
	{ 
		$d = $this->input->post('newAlbum');
		mkdir("img/original/".$d);
		mkdir("img/images/".$d);
		mkdir("img/thumb/".$d);
		
		$data['title'] = 'Update Gallery';
		$data['heading'] = 'Update Gallery';
		$data['album'] = $d;
		
		$this->load->view('admin/includes/header', $data);
		$this->load->view('admin/includes/nav');
		$this->load->view('admin/gallery', $data);
		$this->load->view('admin/album', $data);
		$this->load->view('admin/includes/footer');	
	}
	
	function upload()
	{
		$images = $_FILES;
		$an = $this->input->post('album_name');
		//echo $an;
		//mkdir("img/testing");
		$paths = array();
		$pathstn = array();
		for ($i=0; $i<count($images['userfile']['name']); $i++)
		{	
			$uploads_dir = 'img/original/'.$an;
			$tempfile = $images['userfile']["tmp_name"][$i];
			$name = $images['userfile']["name"][$i];
			$orgfile = "$uploads_dir/$name";
			move_uploaded_file($tempfile, $orgfile);
			
			$path = './img/images/'.$an.'/'.$name;
			$pathtn = './img/thumb/'.$an.'/tn_'.$name;
			
			$this->imageResize($orgfile, $path);
			$this->imageThumb($orgfile, $pathtn);
			
			array_push($paths, $path);
			array_push($pathstn, $pathtn);
		}	
		$data['title'] = 'Update Gallery';
		$data['heading'] = 'Update Gallery';
		$data['album'] = $an;
		$data['path'] = $paths;
		$data['pathtn'] = $pathstn;
		
		$this->load->view('admin/includes/header', $data);
		$this->load->view('admin/includes/nav');
		$this->load->view('admin/gallery', $data);
		$this->load->view('admin/album', $data);
		$this->load->view('admin/includes/footer');
	}
	
 	function imageResize($orgfile, $path) 
	{
		$n = imagecreatefromjpeg($orgfile);
		$ar = getimagesize($orgfile);
		$orgw = $ar[0];
		$orgh = $ar[1];
		
		$cont = imagecreatetruecolor(200, 302);
		imagecopyresampled($cont, $n, 0, 0, 0, 0, 200, 302, $orgw, $orgh);
		imagejpeg($cont, $path ,100);
		imagedestroy($n);
	}
	
	function imageThumb($orgfile, $pathtn)
	{
		$n = imagecreatefromjpeg($orgfile);
		$ar = getimagesize($orgfile);
		$orgw = $ar[0];
		$orgh = $ar[1];
		
		$cont = imagecreatetruecolor(50, 76);
		imagecopyresampled($cont, $n, 0, 0, 0, 0, 50, 76, $orgw, $orgh);
		imagejpeg($cont, $pathtn ,100);
		imagedestroy($n);
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