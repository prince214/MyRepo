<?php
session_start();

?>
<?php

if(isset($_POST['submit'])){

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

// echo "session ki utt patti";
// echo "<br>";
// echo "<a href='session_start.php'>click </a>";

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
  </head>
  <body>
   
    <div class="col-lg-4 mx-auto shadow p-3 mt-5">
                <form  method="POST">
                <div class="form-group">
                <h4>Session Check in PHP</h4>
                    <input type="email" name = "email" class="form-control" id="user" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <input type="password" name = "pass" class="form-control" id="pass" placeholder="Password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


