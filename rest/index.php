
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>SignUp</title>
  </head>
  <body>


    <div class="container mt-5">
      
      <div class="row" >
      
      <div class="col-sm-6 shadow p-5">
          
          <strong>SignUp</strong><br><br>
      <form action="signup.php" method="POST">

        <div class="form-group">
          <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
          <span style="color: red;" id="user_chk"></span>
        </div>
        <div class="form-group">
          <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
          <input type="password" name="password" id="password" class="form-control"  placeholder="Password">
        </div>
        <button type="submit" name="signup" class="btn btn-primary">Submit</button>
      </form>


       <br><br><strong>Login</strong><br><br>
      <form action="signup.php" method="POST">

        <div class="form-group">
          <input type="email" name="email"  class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control"  placeholder="Password">
        </div>
        <button type="submit" name="login" class="btn btn-primary">Submit</button>
      </form>
        </div>

        <div class="col-sm-6 shadow p-5">
          
          <strong>ADD Product</strong><br><br>
      <form action="add.php" method="POST">

        <div class="form-group">
          <input type="text" name="id"  class="form-control" placeholder="Enter ID">
        </div>
        <div class="form-group">
          <input type="text" name="product"  class="form-control" placeholder="Enter Product">
        </div>
        <div class="form-group">
          <input type="text" name="price" class="form-control"  placeholder="Price">
        </div>
        <button type="submit" name="add" class="btn btn-primary">ADD</button>
      </form>


       <br><br><strong>Search</strong><br><br>
      <form action="search.php" method="POST">

        <div class="form-group">
          <input type="text" name="id"  class="form-control" placeholder="Enter ID">
        </div>
        <button type="submit" name="search" class="btn btn-primary">Search</button>
      </form>



      <br><br><strong>Display</strong><br><br>
      <form action="display.php" method="GET">

        <button type="submit" name="view" class="btn btn-primary">View</button>
      </form>
        </div>



      </div>

    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- <script>

      $(document).ready(function(){

        $.get("http://127.0.0.1/Prince/rest/signup.php",function(data,status){
          console.log(data);
          var userData = JSON.parse(data);

          for(var i=0;i<userData.length;i++){
            var user = "<b>Username:</b> "+ userData[i].username + "   "+
                        "<b>Email: </b>"+ userData[i].email + "   "+
                        "<b>Password:</b> "+ userData[i].password;

            user = "<li>"+user+"</li>";
            $("#userDisplay").append(user);
          }
        });



        $("#submit").click(function(){

        var username = $("#username").val();
        var email = $("#email").val();
        var password = $("#password").val();

        var user = {
          userName: username,
          userEmail: email,
          userPassword: password
        };


        $.post("http://127.0.0.1/Prince/rest/signup.php",user,function(data){
          console.log(data);
          if(data == "0"){
              document.getElementById("user_chk").innerHTML = "username exist";
          }
        });
      });



      });
      
    </script> -->
  </body>
</html>