<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Theme extends CI_Controller {

	public function index()
	{
		 $this->load->view('template/header');
		  $this->load->view('template/main');
		   $this->load->view('template/footer');
	}
	public function demo(){
		$this->load->view('template/test');
	}

	

}
