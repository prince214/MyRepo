<?php

class Auth extends CI_Controller{

	
     public function resetPassword(){


     	if(!empty($_GET['token']) && !empty($_GET['user_id'])){

         	$token = $_GET['token'];
         	$user_id = $_GET['user_id'];
            $query = $this->db->where('pwdResetToken',$token)
			 		->get('pwdReset');

         if($query->num_rows()){

         	$this->load->view('template/resetPassword');
         	$this->getUserInfo($token,$user_id);

         	echo "string";
         	
         }
         else
         {
         	echo "Invalid Token. <br> Please try through a valid Reset URL...";
         }


     	}
     }

     public function getUserInfo($token,$user_id){

     	$data = array(
     		'token'=>$token,
     		'user_id'=>$user_id
     	);

     	return $data;

     }


     public function newPassword(){

     	// echo $this->getUserInfo($tokenx,$user_idx);

     	$get_token = $this->input->post('get_token');

     	$newPassword = $this->input->post('newPassword');
     	$repeatPassword = $this->input->post('repeatPassword');

     	$this->form_validation->set_rules('newPassword', 'New Password', 'trim|required');
   		$this->form_validation->set_rules('repeatPassword', 'Repeat Password', 'trim|required|matches[newPassword]');
   		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

   		// Run form validation
   		if($this->form_validation->run() == FALSE) 
   			{
   					$this->load->view('template/resetPassword');
   			} 
   			else {

   				$this->load->model('Admin/Forgot_Model');
     			$query = $this->Forgot_Model->newPasswordUpdate($newPassword,$get_token);

     			if($query){
     				$this->session->set_flashdata('success_msg','Password Changed Successfully ...');
                    $this->deleteForgotRequest($get_token);
     				return redirect('Admin/login');
     				unset($_SESSION['success_msg']);
                    

     			}
     			else
     			{
     				$this->session->set_flashdata('error_msg','Something went wrong ...');
     				return redirect('Admin/login');
     				unset($_SESSION['error_msg']);
     			}
     			
   				

   			}

     }

     public function deleteForgotRequest($token){
        $this->load->model('Admin/Forgot_Model');
        if(!$this->Forgot_Model->deleteForgotRequest($token)){
            echo "error deleting Forgot Request";
        }

     }
		
	}






?>