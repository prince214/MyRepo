<?php
 
class User extends CI_Controller {
 
public function __construct(){
 
        parent::__construct();
  			$this->load->helper(array('url'));
  	 		$this->load->model('User_model');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('email');

}
 
public function index()
{
	$this->load->view("Register");
}

/*Register User*/
function register_user()
  {
    //$this->load->view('Register');
    if ($this->input->post()) 
    { 
      $this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
      $this->form_validation->set_rules('user_name', 'Username', 'required|min_length[3]|max_length[30]|alpha|trim'); // validation for name field
      $this->form_validation->set_rules('user_email', 'Email', 'required|valid_email'); // validation for email
      $this->form_validation->set_rules('user_password', 'Password', 'required|min_length[6]|max_length[15]'); // validation password
      $this->form_validation->set_rules('user_age', 'Age', 'required'); // valdation for DOB
      //$this->form_validation->set_message('validate_age', 'Member is not valid');
      $this->form_validation->set_rules('user_mobile', 'User Mobile', 'required|min_length[10]|regex_match[/^[0-9]{10}$/]'); // validation for mobile

       
      if ( $this->form_validation->run() == FALSE )
      {    
        $this->load->view('Register');
        $this->session->set_flashdata('error', 'Please add required fieds');
        $_POST = '';
      
      }else{

        $username = $this->input->post('user_name');
          $user_email = $this->input->post('user_email');
          $user_password = $this->input->post('user_password');
          $user_age = $this->input->post('user_age');
          $user_mobile = $this->input->post('user_mobile');

          $user=array(
          'user_name'=> $username,
          'user_email'=>$user_email,
          'user_password'=>md5($user_password),
          'user_age'=>$user_age,
          'user_mobile'=>$user_mobile
            );
          //echo "<pre>"; print_r($home_data); die;
        if ( $this->User_model->register_user($user) )  // success
        {
          $this->session->set_flashdata('success', 'Register added successfully');
          $_POST = '';
          $this->load->view('Login');
          //redirect('User/login_view');    
        }else{              
          $this->session->set_flashdata('error', 'Error in adding database.');
          $_POST = '';
          $this->load->view('Login');
          //$this->load->view('Login');
          //redirect('User/login_view');
        }
      }     
    }
  }





/*public function register_user(){
    if ($this->input->post()) 
    {      
      $this->form_validation->set_error_delimiters('<span style="color:red">','</span><br>'); // Displaying error in the div
      $this->form_validation->set_rules('user_name', 'Username','required|min_length[3]|max_length[30]|alpha|trim'); // validation for name field
      $this->form_validation->set_rules('user_email', 'Email','required|valid_email'); // validation for email
      $this->form_validation->set_rules('user_password', 'Password','required|min_length[6]|max_length[15]');// validation password
      $this->form_validation->set_rules('user_age', 'Age','trim|required||callback_validate_age'); // valdation for DOB
      $this->form_validation->set_message('validate_age', 'Member is not valid');
      $this->form_validation->set_rules('user_mobile', 'required|regex_match[/^[0-9]{10}$/]'); // validation for mobile
      if($this->form_validation->run() ==FALSE){ 
        $this->session->set_flashdata('error_msg', 'Please add required fieds');
        echo "validation successful";
        $this->load->view('Register');
      }else{

          $username = $this->input->post('user_name');
          $user_email = $this->input->post('user_email');
          $user_password = $this->input->post('user_password');
          $user_age = $this->input->post('user_age');
          $user_mobile = $this->input->post('user_mobile');

          $user=array(
          'user_name'=> $username,
          'user_email'=>$user_email,
          'user_password'=>md5($user_password),
          'user_age'=>$user_age,
          'user_mobile'=>$user_mobile
            );

          if($email_check){
          $this->User_model->register_user($user);
          $this->load->library('email');        
          $this->email->from('sunpreet@mobilyte.com'); 
          $this->email->to($from_email);
          $this->email->subject('Registration Successful'); 
          $this->email->message('Your Account is Successfully Activated');
          $this->email->send();
          $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
          redirect('User/login_view','refresh');
         
        }
        else{
         
          $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
          redirect('user');

        }

          if($this->User_model->register_user($user))
          {
            $this->session->set_flashdata('success_msg', 'Home added successfully');
            $_POST = '';
            redirect('User/login_view');
          }else{

            $this->session->set_flashdata('error', 'Error in adding database.');
            $_POST = '';
            redirect('user');
          }
        //$this->load->view('Login');
      

      }
      
        
        
        //$email_check=$this->User_model->email_check($user['user_email']);
        //print_r ($email_check); die('here');
         
        if($email_check){
          $this->User_model->register_user($user);
          $this->load->library('email');        
          $this->email->from('sunpreet@mobilyte.com'); 
          $this->email->to($from_email);
          $this->email->subject('Registration Successful'); 
          $this->email->message('Your Account is Successfully Activated');
          $this->email->send();
          $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
          redirect('User/login_view','refresh');
         
        }
        else{
         
          $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
          redirect('user');

        }

      }
        //$this->load->view("Register");
         
      } */
         
        public function login_view(){
         
        $this->load->view("Login");
         
        }

        public function forget_view(){
         
        $this->load->view("Forget");
         
        }

        public function changepass_view(){
          $this->load->view("Change_password");
        }




    /*Login Function*/
    function login_user(){
    if ($this->input->post()) 
    { 
      $this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
      $this->form_validation->set_rules('user_email', 'Email', 'required|valid_email'); // validation for email
      $this->form_validation->set_rules('user_password', 'Password', 'required|min_length[6]|max_length[15]'); // validation password
      
      if ( $this->form_validation->run() == FALSE )
      {    
        $this->load->view('Login');
        $this->session->set_flashdata('error_msg', 'Please add required fieds');
        $_POST = '';
      
      }else{
          $user_email = $this->input->post('user_email');
          $user_password = $this->input->post('user_password');     
          $user_login=array(
          'user_email'=>$user_email,
          'user_password'=>md5($user_password),
            );
        $data = $this->User_model->login_u($user_login['user_email'], $user_login['user_password']);
        if($data)
        {

        $this->session->set_userdata('id',$data['id']);
        $this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_name',$data['user_name']);
        $this->session->set_userdata('user_age',$data['user_age']);
        $this->session->set_userdata('user_mobile',$data['user_mobile']);
        $this->load->view('User_profile','refresh');
 
      }
      else{
        $this->session->set_flashdata('error_msg', 'Incorrect email and password,Try again.');
       $this->load->view("Login");
 
       }
      }     
    }
  }




 
  /*function login_user(){	
  $user_login=array( 
	  'user_email' => $this->input->post('user_email'),
	  'user_password' => md5($this->input->post('user_password'))
    );
    $data = $this->User_model->login_u($user_login['user_email'], $user_login['user_password']);
      if($data)
      {
        $this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_name',$data['user_name']);
        $this->session->set_userdata('user_age',$data['user_age']);
        $this->session->set_userdata('user_mobile',$data['user_mobile']);
        $this->load->view('User_profile','refresh');
 
      }
      else{
        $this->session->set_flashdata('error_msg', 'Incorrect email and password,Try again.');
       $this->load->view("Login");
 
      }    
      }*/


      /* Forgot Password (Password sent to email) */
      function forget_pass(){

       if($this->input->post('forgot_pass'))
        {
        $email=$this->input->post('email');
        $que=$this->db->query("select user_password,user_email from user where user_email='$email'");
        $row=$que->row();
        $user_email=$row;
        $user_email=$row->user_email;
        //echo "<pre>"; print_r($user_email); die;
        if((!strcmp($email, $user_email))){
        $pass=$row->user_password;
        //Mail Code
        $this->load->library('email');        
        $this->email->from('sunpreet@mobilyte.com'); 
        $this->email->to($user_email);
        $this->email->subject('Reset Password'); 
        $this->email->message('Your password is $pass ."');
        $this->email->send();
        $this->session->set_flashdata('success_msg', 'Your Password has been sent to your Email Id.'  .$pass);
        $this->load->view('Forget');
        }

      }
    }



    /*Change Password*/
    function change_password(){
      if($this->input->post('change_pass')){
        $old_pass = $this->input->post('old_pass');
        $new_pass = $this->input->post('new_pass');
        $confirm_pass = $this->input->post('confirm_pass');
        $session_id = $this->session->userdata('id');
        //echo "<pre>"; print_r($session_id); die;
        $qu = $this->db->query("select * from user where id = '$session_id'");
        $row = $qu->row();
        $changepass = $this->User_model->change_pass($session_id,$new_pass);
        if($changepass){
        echo "Password changed successfully !";
        $this->load->view('Change_password');
      }else{
        echo "Invalid";
        $this->load->view('Login');
      }
        /*if((!strcmp($old_pass, $row->user_password))&& (!strcmp($new_pass, $confirm_pass))){
        $this->User_model->change_pass($session_id,$new_pass);
        echo "Password changed successfully !";
        $this->load->view('changepass_view');
        }
        else{
        echo "Invalid";
        }*/
       // echo "<pre>"; print_r($row); die;
     }
     //$this->load->view('changepass_view');
    }


      function profile(){
       
      $this->load->view('User_profile');
       
      }
      public function user_logout(){
       
        $this->session->sess_destroy();
        redirect('user/login_view', 'refresh');
      }
       
      }
       
      ?>