<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Theme extends CI_Controller {

	public function __construct()
{
	parent::__construct();
	$this->load->view('template/header');
	$this->load->view('template/footer');
}
	public function index()
	{
		 
		$this->load->view('template/main');
		  
	}
	public function demo(){
		$this->load->view('template/test');
	}
	public function test(){
		$this->load->model('MyUserModel');
		
	}

	

}
