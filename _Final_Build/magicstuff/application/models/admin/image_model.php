<?php

class Image_model extends Model {

	function __construct() 
	{
		parent::Model();  
	}
	
	public function getGD(){
		
		return gd_info();
	}
	
	public function imageCopy($orgfile, $newfile){
		
		$n = imagecreatefromjpeg($orgfile);
		imagejpeg($n,$newfile);
		imagedestroy($n);
	}
	
	public function imageResize()//$orgfile, $newfile, $h, $w)
	{
		
		echo "America Fuck Yeah";
		
		/*
		$n = imagecreatefromjpeg($orgfile);
		$ar = getimagesize($orgfile);
		$orgw = $ar[0];
		$orgh = $ar[1];
		
		$cont = imagecreatetruecolor($w, $h);
		imagecopyresampled($cont, $n, 0, 0, 0, 0, $w, $h, $orgw, $orgh);
		imagejpeg($cont, $newfile,100);
		imagedestroy($n);
*/
		
	}
	
	public function captcha($msg){
		
		$container = imagecreate(275,50);
		$path = "temp/capcha.png";
		$black = imagecolorallocate($container,0,0,0);
		$white = imagecolorallocate($container,255,255,255);
		$fonts = 'misc/fonts/sports.ttf';
		imagefilledrectangle($container, 0,0,250,150,$black);
		imagerectangle($container,0,0,274,49,$white);
		imagefttext($container,24,7,80,45,$white,$fonts,$msg);
		imagepng($container, $path); //need to create temp image and not save
		imagedestroy($container);	
	}
	
	public function fileUpload($file){
		$uploads_dir = 'img';
		$tempfile = $file["tmp_name"];
		$name = $file["name"];
		$path = "$uploads_dir/$name";
		move_uploaded_file($tempfile, $path);
		
		return $path; 
	}
	
}
?>