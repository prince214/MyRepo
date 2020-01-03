<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

	public function index(){


       $this->form_validation->set_rules('uemail','Email','required');
       $this->form_validation->set_rules('upassword','Password','required|min_length[3]');
       $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');


       if($this->form_validation->run()){
           $uemail = $this->input->post('uemail');
           $upassword = $this->input->post('upassword');
           $this->load->model('Admin/LoginModel');
           $login_id = $this->LoginModel->isValidate($uemail,$upassword);
           
           if($login_id){
                $this->session->set_userdata('id',$login_id);
                
                return redirect('Theme/admin');
           }
           else
           {
                $this->session->set_flashdata('invalid_user',"Email or Password doesn't match...");
                $this->load->view('template/Login');
                unset($_SESSION['invalid_user']);
           }
       }
       else{
       	$this->load->view('template/Login');
       }
		
	}

	public function forgotPass(){
		$this->load->view('template/forgotPass');
	}

  public function login(){
    $this->load->view('template/Login');
  }

  public function addUser(){

    $username = $this->input->post('username');
    $role = $this->input->post('role');
    $email = $this->input->post('email');
    $password = md5($this->input->post('password'));

    /************************************Image Upload Code**********************************/
  

  

    // $countfiles = count($_FILES['file']['name']);
    // echo $countfiles;
    // $upload_location = "./upload/";

    // $files_arr = array();

    // for($index = 0;$index < $countfiles;$index++){

    // $filename = $_FILES['file']['name'][$index];

    // $path = $upload_location.$filename;

    // if(move_uploaded_file($_FILES['file']['tmp_name'][$index],$path)){
    // $files_arr[] = $path;
    // echo "sdfs";
    // }
    // else
    // echo"error";
    // }




    $files_arr = array();
 
        // if($this->input->post('submit') && !empty($_FILES['files']['name'])){
            echo $filesCount = count($_FILES['files']['name']);


            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                $_FILES['file']['size']     = $_FILES['files']['size'][$i];
               

                // File upload configuration
                $uploadPath = 'upload/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                // Upload file to server
                if($this->upload->do_upload('file')){
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");

                    $files_arr[] = $uploadPath . $fileData['file_name'];
                    echo "Success";
                }
                else
                {
                  echo "Fail";
                  echo $this->upload->display_errors();
                }
            }
            echo"<pre>";
            print_r($uploadData);
            print_r($files_arr);

      
   
     
  
  

    /*************************************End Image Upload Code**************************************/

    $data = array(
      'username' => $username,
      'role' => $role,
      'email' => $email,
      'password' => $password,
    );

    $this->load->model('Admin/Admin_Model');

    $user_email = $this->input->post('email');

    if($this->Admin_Model->addUser($data) && $this->Admin_Model->uploadFiles($files_arr,$user_email)){
         redirect('Theme/admin');
    }
     else
    {
      echo "fail .................";
      die();
    }

    
  }

  public function updateUser(){

    $user_id = $this->input->post('user_id');
    $username = $this->input->post('username');
    $role = $this->input->post('role');
    $email = $this->input->post('email');
    $password = md5($this->input->post('password'));

    $data = array(
      'id' => $user_id,
      'username' => $username,
      'role' => $role,
      'email' => $email,
      'password' => $password
    );

    $this->load->model('Admin/Admin_Model');

    if($this->Admin_Model->updateUser($data)){
         redirect('Theme/admin');
    }

  }

  public function deleteUser(){

    $user_id = $this->input->post('user_id');

    $this->load->model('Admin/Admin_Model');

    if($this->Admin_Model->deleteUser($user_id)){
         redirect('Theme/admin');
    }

  }

  public function toggle_status(){
      $this->load->model('Admin/Admin_Model');
      $this->Admin_Model->toggle_status();
  }

  public function logout(){
      $this->load->model('Admin/Admin_Model');
      $this->Admin_Model->logout();
  }

}

