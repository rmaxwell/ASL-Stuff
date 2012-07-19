<?php

class Home extends Controller {

	function __construct()
	{
		parent::Controller();
		$this->load->model('home_model');
		$this->is_logged_in();
	}
	
	
	
}	
?>