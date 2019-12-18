<?php

  // Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller{

  public function GenerateToken(){
    echo $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "www.mmtus.net/forgottenpwd/create-new-password.php?selector=".$selector."&validator=".bin2hex($token);

    echo "<br>" .$expires = date("U")+1800;

    echo "<br>" .$hashedToken = password_hash($token,PASSWORD_DEFAULT);


  }

  public function DB_Reset(){
    //Delete TABLE pwdReset where email matches
    //Insert the whole table
  }

	public function send(){

    $this->GenerateToken();
    die();


     $user_email = $this->input->post('uemail');

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
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    }
    else
    {
      echo "Not Present in database";
    }




       
		
	}

}

