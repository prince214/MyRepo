<?php
    session_start();
    if(!isset($_SESSION['user']))
    {
    header("location:index.php");
    }


    include 'connection.php';

    // Show employee table in datatable
    $sql = "SELECT * FROM employee";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    $data[] = $row;
    }

    
?>


    <!doctype html>
    <html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- css files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <script src="https://kit.fontawesome.com/5106db6593.js" crossorigin="anonymous"></script>
    <title>Session Testing</title>
    </head>
    <body>

    <section>


          <!-- ########## Nav Bar starts ###########-->
    <nav class="navbar navbar-dark bg-dark" >
    <a class="navbar-brand" href="#">
    <span>   
              <i class="fab fa-drupal">      
              <?php  echo "Welcome ".$_SESSION['user']."<br>"; ?>
              </i>
    </span> 
    </a>
    <span class="justify-content-end">
    <button style="" class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">Add</button>
    <button class="btn btn-warning" type="button" onclick="location.href='session_destroy.php'">Logout</button> 
    </span>
    </nav>


        <!-- ######### DataTable starts #########3 -->
    <div style = "margin-left: 14%"; class="col-md-9 mt-5">

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php  
          

          foreach ($data as $row){
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['position']; ?></td>
                <td><?php echo $row['office']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['start_date']; ?></td>
                <td><?php echo $row['salary']; ?></td>
                <td>
                
                <input type="button" data-toggle="modal" data-target="#modify<?php echo $row['id']; ?>" class="btn btn-warning" value="Modify">
                <!-- <input type="button" data-toggle="modal" data-target="#delete<?php echo $row['id']; ?>" class="btn btn-warning" value="Delete"> -->
                <form method="post" action="modify.php" style="display:inline";>
                <input type="hidden" value="<?php echo $row['id']; ?>" name ="user_id2">
                <button type="submit" name="delete" class="btn btn-danger">DELETE</button>
                </form>    
            </td>
            </tr>

    <!-- ####################   MODIFY MODAL  ####################3 -->

    <!-- Modal -->
    <div class="modal fade" id="modify<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modifyLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="modifyLabel">Modify Employee Details</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">


    <form action="modify.php" method="post">
    <div class="form-group">

          <input type="text" value="<?php echo $row['name']; ?>" name = "name" class ="form-control mb-2" id="name" placeholder="Enter Name">
          <input type="text" value="<?php echo $row['position']; ?>" name ="position" class="form-control mb-2" id="position" placeholder="Enter Position">
          <input type="text" value="<?php echo $row['office']; ?>" name ="office" class ="form-control mb-2" id="office" placeholder="Enter Office">
          <input type="text" value="<?php echo $row['age']; ?>" name ="age" class ="form-control mb-2" id="age" placeholder="Enter Age">
          <input type="text" value="<?php echo $row['start_date']; ?>" name ="date" class ="form-control mb-2" id="date" placeholder="Enter Start Date">
          <input type="text" value="<?php echo $row['salary']; ?>" name ="salary" class ="form-control mb-2" id="salary" placeholder="Enter Salary">

          <input type="hidden" value="<?php echo $row['id']; ?>" name ="user_id">
          
          <div style="display: flex; justify-content: center;">
          <input type="submit" name="modify" class="btn btn-primary mr-3 " value="MODIFY">
          <!-- <input type="submit" name="delete" class="btn btn-primary " value="DELETE"> -->
          </div>
    </div>
    </form>
    </div>


    </div>
    </div>
    </div>
            <?php }  ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </tfoot> 
    </table>
  

    </section>

    <!-- ####################   FORM MODAL  ####################3 -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Add Employee Details</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">

    <form action="add.php" method="post">
    <div class="form-group">
          <input type="text" name = "name" class ="form-control mb-2" id="name" placeholder="Enter Name">
          <input type="text" name ="position" class="form-control mb-2" id="position" placeholder="Enter Position">
          <input type="text" name ="office" class ="form-control mb-2" id="office" placeholder="Enter Office">
          <input type="text" name ="age" class ="form-control mb-2" id="age" placeholder="Enter Age">
          <input type="text" name ="date" class ="form-control mb-2" id="date" placeholder="Enter Start Date">
          <input type="text" name ="salary" class ="form-control mb-2" id="salary" placeholder="Enter Salary">
          
          <div style="display: flex; justify-content: center;">
          <input type="submit" name="add" class="btn btn-primary " value="ADD">
          </div>
    </div>
    </form>
    </div>


    </div>
    </div>
    </div>




           

            

  

   
        
    <!--  ##########  ALL SCRIPTS ########### -->

    
    <!-- js files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <!-- ##########  DataTable jquery ###########-->

    <script>
    $(document).ready(function() {
      $('#example').DataTable();
    } );
    </script>

    
    </body>
    </html>

