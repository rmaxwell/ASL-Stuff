<?php

class Booking extends Controller 
{
	function __construct()
	{
		parent::Controller();
		$this->load->model('admin/book_model');
		$this->is_logged_in();
	}
	
	function index()
	{
		$this->load->helper('form');
	
		$data['main_content'] = 'admin/booking';
		$data['title'] = 'STUFF the Magic Mascot | Update Booking Info | Content Management System';
		$data['book_data'] = $this->book_model->get();
		$this->load->view('admin/includes/temp_full', $data);
	}
	
	function save()
	{
		$update = date('m-d-Y') ."\n";
		$this->load->helper('url');
		$postdata = array(
			'booking_textarea' => $this->input->post('booking_textarea'),
			'booking_phone' => $this->input->post('booking_phone'),
			'booking_email' => $this->input->post('booking_email'),
			'date_updated' => $update
		);
		
		$this->book_model->update($postdata);

		redirect('/booking', 'refresh');
	}
	
	function remove() {
		$filename = $this->input->post('image_number');

		$update = date('m-d-Y') ."\n";
		$postdata = array(
			$filename => 0,
			'date_updated' => $update
		);
		
		$this->book_model->update($postdata);
		redirect('/booking');
	}
	
	function upload()
	{
		$update = date('m-d-Y') ."\n";
		$filename = $this->input->post('image_number');

		$config['upload_path'] = './img/original/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['overwrite'] = true;
		$config['max_size']	= '100000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			redirect('/booking');
		}
		
		$data = array('upload_data' => $this->upload->data());
		
		$path = $data{'upload_data'}{'full_path'};
		
		$postdata = array(
			$filename => 1,
			'date_updated' => $update
		);
		
		$this->book_model->update($postdata);
		
		$this->imageResize($path, $filename);
		$this->imageThumb($path, $filename);
		
		redirect('/booking');
	}
	
	public function imageResize($orgfile, $fn)
	{
		$n = imagecreatefromjpeg($orgfile);
		$ar = getimagesize($orgfile);
		$orgw = $ar[0];
		$orgh = $ar[1];
		
		$cont = imagecreatetruecolor(200, 302);
		imagecopyresampled($cont, $n, 0, 0, 0, 0, 200, 302, $orgw, $orgh);
		imagejpeg($cont, './img/images/'.$fn.'.jpg' ,100);
		imagedestroy($n);
	}
	
	public function imageThumb($orgfile, $fn)
	{
		$n = imagecreatefromjpeg($orgfile);
		$ar = getimagesize($orgfile);
		$orgw = $ar[0];
		$orgh = $ar[1];
		
		$cont = imagecreatetruecolor(50, 76);
		imagecopyresampled($cont, $n, 0, 0, 0, 0, 50, 76, $orgw, $orgh);
		imagejpeg($cont, './img/thumb/'.$fn.'_tn.jpg' ,100);
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