<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


defined('BASEPATH') OR exit('No direct script access allowed');




class Mail extends CI_Controller{

  public function GenerateToken($user_email){

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);
    $expires = date("U")+1800;
    $hashedToken = password_hash($token,PASSWORD_DEFAULT);

    $url = $this->DB_Reset($user_email,$selector,$expires,$hashedToken);

    return $url;

  }

  public function DB_Reset($user_email,$selector,$expires,$hashedToken){
    //Delete TABLE pwdReset where email matches
    $this->db->where('pwdResetEmail',$user_email);
    if(!$this->db->delete('pwdReset')){
      echo "Error Deleting pwdReset table";
      exit();
    }

    $query = $this->db->select('id')
                        ->where('email',$user_email)
                        ->get('users');

    if($query->num_rows()){
      $user_id = $query->row()->id;
    }
    else
    {
      $this->session->set_flashdata('user_mail_check_msg','Your Email is not registered ...');
      return redirect('Admin/forgotPass');
      unset($_SESSION['user_mail_check_msg']);
    }

    
    //Insert the in the pwd database table

    $data = array(
      'userID' => $user_id,
      'pwdResetEmail' => $user_email,
      'pwdResetSelector' => $selector,
      'pwdResetToken' => $hashedToken,
      'pwdResetExpires' => $expires
      );

      echo "<pre>"; print_r($data);
      
    if($this->db->insert('pwdReset', $data)){

      $url = base_url('Auth/resetPassword')."?token=".$data['pwdResetToken']."&user_id=".$data['userID'];
      return $url;

    }

  }

	public function send(){

    $user_email = $this->input->post('uemail');

    $url = $this->GenerateToken($user_email);


     

    $this->load->model('Admin/Forgot_Model');
    $user_id = $this->Forgot_Model->EmailCheck($user_email);



    if($user_id){
    

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.sendgrid.net';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'apikey';                     // SMTP username
    $mail->Password   = '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';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('princeparaste78@gmail.com', 'Mailer');
    $mail->addAddress($user_email, 'User');     // Add a recipient      


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'Click here to reset Password:<br>'.$url;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    


    //Setting flashmsg to check your mail
    $this->session->set_flashdata('check_mail','Please Check your mail...');
    
    //Loading View to Check Your Email....
    return redirect('Admin/forgotPass');

    }
    else
    {
      echo "Not Present in database";
    }

  
		
	}

}

