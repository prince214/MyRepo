<?php
session_start();
include 'connection.php';
include 'process.php';
?>
<?php

if(isset($_POST['login'])){

    $email = $_POST['emails'];
    $pass = $_POST['pass'];

    $c1 = 'princeparaste78@gmail.com';
    $c2 = '123';
    if($email == $c1 && $pass == $c2){
        $_SESSION['user']= $email;
        header("location:session_start.php");
    }
    else{
        echo "INVALID CREDENTIALS";
    }

}

// if(isset($_POST['register'])){

//   $email = $_POST['email'];
//   $pass = $_POST['password'];
//   $username = $_POST['username'];
//   $table_name = $_POST['table_name'];
//   $token = md5(uniqid($username, true));  //GENERATING RANDOM UNIQUE TOKEN

//   echo "$sql";
//   $sql = "INSERT INTO users (id,email,password,table_name,username,token) VALUES (NULL,'$email','$pass','$table_name','$username','$token')";
  
  
  
//   if(mysqli_query($conn,$sql)){
//     header("location:index.php");
//   }
//   else
//   {
//     echo("Error description: " . mysqli_error($conn));
//   }
// }

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Session Testing</title>

    <style>
    body{
      background: rgb(88,233,157);
      background: linear-gradient(90deg, rgba(88,233,157,0.8449754901960784) 0%, rgba(42,214,139,1) 35%, rgba(0,212,255,0.9346113445378151) 100%);
    }

    .form_error span{
      font-size:.9em;
      color:red;
    }
    .form_error input {
      border: 1px solid red;
    }
    </style>

  </head>
  <body>

    <div class="container" style="margin-top: 150px;">


    <span>
    <img class="img-responsive" src="images/1.png">
    </span>

            <div class="col-md-4 col-sm-12 shadow p-3 float-right rounded" style="background-color: #fff"; > 
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">SignUp</a>
                    </li>
                  </ul>

                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                          <form  method="POST">
                              <div class="form-group">
                                  <input type="email" name = "emails" class="form-control mt-2" id="user" placeholder="Enter email">
                              </div>

                              <div class="form-group">
                                  <input type="password" name = "pass" class="form-control mt-2" id="pass" placeholder="Password">
                              </div>
                              <button type="submit" name="login" class="btn btn-primary">Login</button>
                          </form>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                          <form method="POST">
                            
                          <div
                          <?php if(isset($email_error)): ?>
                            class = "form-group form_error"
                          <?php endif ?>
                          >
                            <input type="email" name = "email" class="form-control mt-2" id="email" placeholder="Enter email">
                            <?php if(isset($email_error)): ?>
                            <span> <?php echo $email_error; ?></span>
                            <?php endif ?>
                            
                          </div>

                          <div class="form-group">
                            <input type="password" name = "password" class="form-control mt-2" id="password" placeholder="Password">
                            
                          </div>

                          <div 
                          <?php if(isset($username_error)): ?>
                            class = "form-group form_error"
                          <?php endif ?>
                          >
                            <input type="text" name = "username" class="form-control mt-2 mb-2" id="username" placeholder="Enter UserName">
                            <?php if(isset($username_error)): ?>
                            <span> <?php echo $username_error; ?></span>
                            <?php endif ?>
                          </div>    

                          <div 
                          <?php if(isset($table_name_error)): ?>
                            class = "form-group form_error"
                          <?php endif ?>
                          >
                            <input type="text" name = "table_name" class="form-control mt-2 mb-2" id="table_name" placeholder="Enter DataTable Name">
                            <?php if(isset($table_name_error)): ?>
                            <span> <?php echo $table_name_error; ?></span>
                            <?php endif ?>
                          </div>
                              
                              <button type="submit" name="register" class="btn btn-primary" id="reg_btn">SignUp</button>
                          </form>
                    </div>
                  </div>
            </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
    <script>
          $('#myTab a').on('click', function (e) {
          e.preventDefault()
          $(this).tab('show')
          });
    </script>

    <script>   //Script to hold the screen after signup screen validator gives some error [on Bootstrap tab]
    $(document).ready(function(){
        $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
            localStorage.setItem('activeTab', $(e.target).attr('href'));
        });
        var activeTab = localStorage.getItem('activeTab');
        if(activeTab){
            $('#myTab a[href="' + activeTab + '"]').tab('show');
        }
    });
    </script>
    
  
  </body>
</html>


