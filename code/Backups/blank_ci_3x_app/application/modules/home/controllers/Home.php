<?php 


class Home extends My_Controller
{
	function __construct(){
		parent:: __construct();
	}

	function index(){
		$this->load->view('home_v');
	}

	function about(){
		$this->load->view('about_v');
	}
}



?>