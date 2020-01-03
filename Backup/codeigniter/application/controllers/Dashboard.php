<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
{
	parent::__construct();
	
	
}
	public function index()
	{	 	
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
	
	public function admin(){

		
		if($this->session->userdata('id')){
        return redirect('Dashboard/index');
    	}
		$this->load->view('template/Login');
		
	}

	public function movies(){

		$this->load->model('Admin/Movies_model');
		$movieData['movieData'] = $this->Movies_model->fetch_movies();



		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/movies',$movieData);
		$this->load->view('template/footer');
	}

	

}
