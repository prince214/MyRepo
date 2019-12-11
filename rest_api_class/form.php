<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>API using class</title>
  </head>
  <body>

      <div class="container mt-5">
      
      <div class="row" >
      
      <div class="col-sm-6 shadow p-5">
          
          <strong>SignUp</strong><br><br>
      <form action="api/user/signup.php" method="POST">

        <div class="form-group">
          <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
        </div>
        <!-- <div class="form-group">
          <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
        </div> -->
        <div class="form-group">
          <input type="password" name="password" id="password" class="form-control"  placeholder="Password">
        </div>
        <button type="submit" name="signup" class="btn btn-primary">Submit</button>
      </form>

        </div>


        <div class="col-sm-6 shadow p-5">
            <strong>Login</strong><br><br>
      <form action="api/user/login.php" method="GET">

        <div class="form-group">
          <input type="text" name="username" class="form-control" placeholder="Enter Username">
        </div>
        <!-- <div class="form-group">
          <input type="email" name="email"  class="form-control" placeholder="Enter email">
        </div> -->
        <div class="form-group">
          <input type="password" name="password" class="form-control"  placeholder="Password">
        </div>
        <button type="submit" name="login" class="btn btn-primary">Submit</button>
      </form>
        </div>

         


      </div>

    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>