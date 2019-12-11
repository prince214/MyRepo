<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="main">
<div id="login">
  <?php
                $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');
 
                  if($success_msg){
                    ?>
                    <div class="alert alert-success">
                      <?php echo $success_msg; ?>
                    </div>
                  <?php
                  }
                  if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $error_msg; ?>
                    </div>
                    <?php
                  }
                  ?>
<?php //echo @$error; ?>
<h2>Forgot Password</h2>
<br>
<form method="post" action="<?php echo base_url('user/forget_pass'); ?>">
<label>Email ID :</label>
<input type="text" name="email" id="name" placeholder="Email ID"/><br /><br />
<input type="submit" value="login" name="forgot_pass"/><br />
</form>
</div>
</div>
</body>
</html>