<?php
/*$user_id=$this->session->userdata('user_id');
 
if(!$user_id){
 
  redirect('user/login_view');
}*/
 //$this->session->sess_destroy();
$this->load->view("extra/headers.php"); 
 ?>
 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Profile Dashboard-CodeIgniter Login Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
      
.top-bar {
    background: #555;
    color: #fff;
    font-size: 0.9rem;
    padding: 10px 0;
}

.top-bar .contact-info {
    margin-right: 20px;
}

.top-bar ul {
    margin-bottom: 0;
}

.top-bar .contact-info a {
    font-size: 0.8rem;
}

.top-bar ul.social-custom {
    margin-left: 20px;
}
.top-bar ul {
    margin-bottom: 0;
}

.top-bar a.login-btn i, .top-bar a.signup-btn i {
    margin-right: 10px;
}

.top-bar ul.social-custom a:hover {
    background: #4fbfa8;
    color: #fff;
}
.top-bar ul.social-custom a {
    text-decoration: none !important;
    font-size: 0.7rem;
    width: 26px;
    height: 26px;
    line-height: 26px;
    color: #999;
    text-align: center;
    border-radius: 50%;
    margin: 0;
}
a:focus, a:hover {
    color: #348e7b;
    text-decoration: underline;
}
.top-bar a.login-btn, .top-bar a.signup-btn {
    color: #eee;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    text-decoration: none !important;
    font-size: 0.75rem;
    font-weight: 700;
    margin-right: 10px;
}

    </style>
  </head>
  <body>
 
<div class="container">
  <div class="row">
    <div class="col-md-4">
 
      <table class="table table-bordered table-striped">
 
 
        <tr>
          <th colspan="2"><h4 class="text-center">User Info</h3></th>
 
        </tr>
          <tr>
            <td>User ID</td>
            <td><?php echo $this->session->userdata('id'); ?></td>
          </tr>
          <tr>
            <td>User Name</td>
            <td><?php echo $this->session->userdata('user_name'); ?></td>
          </tr>

          <tr>
            <td>User Email</td>
            <td><?php echo $this->session->userdata('user_email');  ?></td>
          </tr>
          <tr>
            <td>User Age</td>
            <td><?php echo $this->session->userdata('user_age');  ?></td>
          </tr>
          <tr>
            <td>User Mobile</td>
            <td><?php echo $this->session->userdata('user_mobile');  ?></td>
          </tr>
      </table>
     </div>
  </div>

</div>
  </body>
</html>
<?php $this->load->view("extra/footer.php"); ?>