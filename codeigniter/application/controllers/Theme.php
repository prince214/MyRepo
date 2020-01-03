<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Theme extends CI_Controller {

	public function __construct()
{
	parent::__construct();
	
	
}
	public function index()
	{	 	
		if($this->session->userdata('id')){
        return redirect('Theme/admin');
    	}
		$this->load->view('template/Login');
		  
	}
	
	public function admin(){

		if($this->session->userdata('id')){

		$this->load->view('template/header');
		$this->load->view('template/sidebar');

		$this->load->model('Admin/Admin_Model');
		$data['users'] = $this->Admin_Model->showUser();
		$this->load->view('template/main',$data);

		$this->load->view('template/footer');
      
    	}
    	else{
    		redirect('Admin/login');
    	}
		
		
	}

	

}
