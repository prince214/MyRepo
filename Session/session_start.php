<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("location:index.php");
}

include 'connection.php';
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    
    
    
    <!-- js files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    

    <!-- css files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <script src="https://kit.fontawesome.com/5106db6593.js" crossorigin="anonymous"></script>
    
    
    <title>Session Testing</title>

    <style>
            svg {
            margin: auto;
            }
    </style>
  </head>
  <body>
   



  <section>

  <!-- <nav class="navbar navbar-dark bg-dark" s>
        <a class="navbar-brand" href="#">
          <span >
                      <i class="fab fa-drupal">      
                      <?php  echo "Welcome ".$_SESSION['user']."<br>"; ?>
                      </i>
          </span> 
        
        </a>
        <button class="btn btn-warning" type="button" onclick="location.href='session_destroy.php'" >Logout</button> 
</nav> -->


 

<div class="col-md-6 mx-auto mt-5">
       
        <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot> 
            </table>
            
            <center>
                <span id= "addRow" data-toggle="modal" data-target="#exampleModal" style="color: blue; font-size:2rem; cursor: pointer;" id="add">
                    <i class="far fa-plus-square"></i>
                </span>
            </center>
            
            <div class = "col-md-6">
            <form id = "emp_form" action="add.php" method="post">
            <div class="form-group">
                  <input type="text" name = "name" class ="form-control mb-2" id="name" placeholder="Enter Name">
                  <input type="email" name ="position" class="form-control mb-2" id="position" placeholder="Enter Postion">
                  <input type="text" name ="office" class ="form-control mb-2" id="name" placeholder="Enter Office">
                  <input type="text" name ="age" class ="form-control mb-2" id="name" placeholder="Enter Age">
                  <input type="text" name ="date" class ="form-control mb-2" id="name" placeholder="Enter Start Date">
                  <input type="text" name ="salary" class ="form-control mb-2" id="name" placeholder="Enter Salary">
                  
                  <input type="button" name="add" onclick="send_server()" class="btn btn-primary" value="ADD">
            </div>
      </form>
            </div>

        </div>


<button type="button" name="test" class="btn btn-primary">ADD</button>

  </section>

  <!-- ####################   FORM MODAL  ####################3 -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            

      <!-- <form id = "emp_form" action="add.php" method="post">
            <div class="form-group">
                  <input type="text" name = "name" class ="form-control mb-2" id="name" placeholder="Enter Name">
                  <input type="email" name ="email" class="form-control mb-2" id="position" placeholder="Enter Email">
                  <input type="text" name ="office" class ="form-control mb-2" id="name" placeholder="Enter Office">
                  <input type="text" name ="age" class ="form-control mb-2" id="name" placeholder="Enter Age">
                  <input type="text" name ="date" class ="form-control mb-2" id="name" placeholder="Enter Start Date">
                  <input type="text" name ="salary" class ="form-control mb-2" id="name" placeholder="Enter Salary">
                  
                  <input type="button" name="add" onclick="send_server()" class="btn btn-primary" value="ADD">
            </div>
      </form> -->



            

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">ADD</button> -->
      </div>
    </div>
  </div>
</div>

   


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
            <script>
                    $(document).ready(function() {
                        $('#example').DataTable();
                    } );
          </script>

          
<script> 

          
function send_server(){
          console.log("innn");
            // Creating the XMLHttpRequest object
            var request = new XMLHttpRequest();
            
            // Instantiating the request object
            request.open("POST", "add.php");
            
            // Defining event listener for readystatechange event
            request.onreadystatechange = function() {
                // Check if the request is compete and was successful
                if(this.readyState === 4 && this.status === 200) {
                    // Inserting the response from server into an HTML element
                    // document.getElementById("result").innerHTML = this.responseText;
                }
            };
            
            // Retrieving the form data
            var myForm = document.getElementById("emp_form");
            var formData = new FormData(myForm);

            // Sending the request to the server
            request.send(formData);

          }

</script>


<!--     
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
   
    
  </body>
</html>

