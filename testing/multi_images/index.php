<?php 

include 'connection.php';

$sql = "SELECT * FROM users";
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

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"
    <title>Images Upload PHP</title>
  </head>
  <body>

        <div class="col-md-6 col-sm-12 " >
        <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Table_Name</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php  
                foreach ($data as $row){
                ?>    
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["password"]; ?></td>
                        <td><?php echo $row["table_name"]; ?></td>
                        <td><?php echo $row["username"]; ?></td>
                        <td>

                            <form id="myform" enctype="multipart/form-data" style="display:inline">
                                <input type="file" name = "file[]"  id="file" multiple>
                                <button type="submit" id="submit"  name="submit">Upload</button>
                            </form>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            View
                            </button>

                        </td>
                    </tr>
                    <?php
                    } 
                    ?>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Table_Name</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>


        <!-- Bootstrap Modal -->
        <!-- Button trigger modal -->


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
      <?php  
                foreach ($data as $row){
                ?>  
                <img src="<?php echo $row['images_dir']; ?>" alt="img" height="100" width="150">
                
                <?php }?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

   <!-- js files -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

   <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
   <!-- //bootstrap default  -->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function() {
    $('#example').DataTable();
    } );
    </script>

<script>
    var myform = document.querySelector('#myform');
    var inputfile = document.querySelector('#file');

    var request = new XMLHttpRequest();
    

    myform.addEventListener('submit',function(e){
            e.preventDefault();
            
            var formData = new FormData();
            var totalfiles = document.getElementById('file').files.length;
            for (var index = 0; index < totalfiles; index++) {
                formData.append("file[]", document.getElementById('file').files[index]);
            }

            request.open('post','upload.php');
            request.send(formData);
            alert("Upload Successfull");
            
    });
</script>
</body>
</html>