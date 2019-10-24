<?php
session_start();

?>
<?php

if(isset($_POST['login'])){

    $email = $_POST['email'];
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

if(isset($_POST['submit'])){

  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $table_name = $_POST['table_name'];


  $sql = "INSERT INTO users (id,email,password,table_name) VALUES (NULL,'$email','$pass','$table_name')";
  if(mysqli_query($conn,$sql)){
    header("location:index.php");
  }
  else
  {
    echo "error";
    echo "$sql";
  }
}

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
                                  <input type="email" name = "email" class="form-control mt-2" id="user" placeholder="Enter email">
                              </div>

                              <div class="form-group">
                                  <input type="password" name = "pass" class="form-control mt-2" id="pass" placeholder="Password">
                              </div>
                              <button type="submit" name="login" class="btn btn-primary">Login</button>
                          </form>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                          <form  method="POST">
                                  <input type="email" name = "email" class="form-control mt-2" id="user" placeholder="Enter email">
                                  <input type="password" name = "pass" class="form-control mt-2" id="pass" placeholder="Password">
                                  <input type="text" name = "table_name" class="form-control mt-2 mb-2" id="table_name" placeholder="Enter DataTable Name">
                              
                              <button type="submit" name="signup" class="btn btn-primary">SignUp</button>
                          </form>
                    </div>
                  </div>
            </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
    <script>
          $('#myTab a').on('click', function (e) {
          e.preventDefault()
          $(this).tab('show')
          })
    </script>
  
  </body>
</html>


