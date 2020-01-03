<div class="ch-container">
    <div class="row">
        

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> User Management System</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-plus"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">

    
    <div id="user-status" class="alert-active" style="display: none; color: white;">
    </div>
  
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Username</th>
        <th>Date registered</th>
        <th>Role</th>
        <th>Image</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $row){

            if($row['account_status']!='0'){
        ?>
    
    <tr>
        <td><?= $row['username']; ?></td>
        <td class="center"><?= $row['registered_date']; ?></td>
        <td class="center"><?= $row['role']; ?></td>
        <td class="center">

             <img src="<?php echo base_url($row['user_images'][0]['file_path']) ?>" width="55" height="55">
         </td>

            
        <td class="center">

             <?php if($row['status'] == "active"): ?>
             <input type="button" id="btn_<?= $row['id']; ?>" data-id="<?= $row['id']; ?>" data-status="active" class="btn btn-success btn-sm toggle-status-btn" value="active" ></input>
             <?php endif ?>

             <?php if($row['status'] == "deactive"): ?>
             <input type="button" id="btn_<?= $row['id']; ?>" data-id="<?= $row['id']; ?>" data-status="deactive" class="btn btn-danger btn-sm toggle-status-btn" value="deactive" ></input>
             <?php endif ?>

             
        </td>
        <td class="center">
            <a class="btn btn-info" href="#" data-toggle="modal" data-target="#editUserModel<?= $row['id']; ?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>

            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#view<?= $row['id']; ?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                View
            </a>

            <form style = "display: inline;" action="<?= base_url("Admin/deleteUser"); ?>" method="POST">
            <button type="submit" name="user_id" class="btn btn-danger" value="<?= $row['id']; ?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </button>
            </form>
        </td>
    </tr>

    <!-- ########################## EDIT USERS MODEL ########################## -->
     <div class="modal fade" id="editUserModel<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Edit User</h3>
                </div>
                <div class="modal-body">
                    

                <div class="box-content">
                <form action="<?= base_url("Admin/updateUser") ?>" method="POST" role="form">

                    <input type="hidden" class="form-control" value="<?= $row['id']; ?>" name="user_id">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" value="<?= $row['username']; ?>" name="username" placeholder="Enter Username">
                    </div>

                    <div class="form-group">
                    <label for="exampleSelect1">Role</label>
                    <select class="form-control" name="role">
                    <option value="staff">Staff</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="teacher">Admin</option>
                    </select>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" value="<?= $row['email']; ?>" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter new Password">
                    </div>

                </div>

                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ########################## View Images MODEL ########################## -->
     <div class="modal fade" id="view<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>User Images</h3>
                </div>
                <div class="modal-body">
                    

                <?php 
                    foreach ($row['user_images'] as $path) {
                        $image_path = base_url($path["file_path"]);
                        ?>  

                        <img src="<?php echo $image_path ?>" width=120 height=120>

                        <?php
                    }


                 ?>

                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

<?php }} ?>
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->



    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    

    <hr>

    <!-- ########################## ADD USERS MODEL ########################## -->
     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Add User</h3>
                </div>
                <div class="modal-body">
                    

                <div class="box-content">
                <form action="<?= base_url("Admin/addUser") ?>" method="POST" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter Username">
                    </div>

                    <div class="form-group">
                    <label for="exampleSelect1">Role</label>
                    <select class="form-control" name="role">
                    <option value="staff">Staff</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    </select>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>

                     <div class="form-group">
                        <label for="exampleInputFile">Upload Images</label>
                        <input type="file" name='files[]' multiple=""  />
                        <?php 
                        if(isset($upload_error)){
                            echo $upload_error;
                        }
                        ?>
                    </div>

                </div>

                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <button type="submit" name="submit" class="btn btn-primary" >ADD</button>
                    <!-- <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a> -->
                </div>
                </form>
            </div>
        </div>
    </div>






    
  

</div><!--/.fluid-container-->

<script type="text/javascript">

$(document).ready(function() {
$('.toggle-status-btn').click(function() {
    var status = $(this).attr("data-status");
    var user_id = $(this).attr("data-id");
    var id = '#' + $(this).attr('id');

    $.ajax({
        type: 'POST',
        url: '<?= base_url("Admin/toggle_status") ?>',
        data: { status: status, user_id: user_id },
        success: function(response) {
            if(status == "active"){
                console.log(response);
                $(id).val("deactive");
                $(id).attr("data-status","deactive");
                $(id).addClass('btn-danger').removeClass('btn-success');
                // $status = $this->session->flashdata('status');
                // if($status){
                    $("#user-status").html("User has been Deactivated");
                    var stat = $("#user-status").attr("class");
                    $("#user-status").addClass('alert-deactive').removeClass(stat);
                    $("#user-status").css("display", "block");
                    $("#user-status").fadeOut(5000);
                // }
            }
            if(status == "deactive"){
                console.log(response);
                $(id).val("active");
                $(id).attr("data-status","active");
                $(id).addClass('btn-success').removeClass("btn-danger");
                // $status = $this->session->flashdata('status');
                // if($status){
                $("#user-status").html("User has been Activated");
                var stat = $("#user-status").attr("class");
                $("#user-status").addClass('alert-active').removeClass(stat);
                $("#user-status").css("display", "block");
                $("#user-status").fadeOut(5000);
                // }
            }
            
        }
    });


});
});

</script>