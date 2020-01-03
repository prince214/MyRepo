
<style type="text/css">
#fileLoader
{
    display:none;
}
</style>
<div id="content" class="col-lg-10 col-sm-10">
    <!-- content starts -->
        <div>
<ul class="breadcrumb">
    <li>
        <a href="#">Home</a>
    </li>
    <li>
        <a href="#">Tables</a>
    </li>
</ul>
 <a class="btn btn-info" href="#" data-toggle="modal" data-target="#add">ADD</a>   
</div>
   
    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">


    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Datatable + Responsive</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <div class="alert alert-info">Click here to check out the site <a href="<?php echo site_url("Movies_controller/movieDashboard") ?>" target="_blank">movieDashBoard</a></div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Movie Name</th>
        <th>Format</th>
        <th>Poster</th>
        <th>Category</th>
        <th>SRC</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
          <?php foreach ($movieData as $row){
        ?>
    <tr>
        <td><?= $row['movie_name']; ?></td>
        <td class="center"><?= $row['format']; ?></td>
        <td class="center"><?= $row['poster']; ?></td>
        <td class="center">
            <?= $row['category']; ?>
        </td>
        <td class="center">
           <?= $row['src']; ?>
        </td>
        <td class="center">
           <?= $row['description']; ?>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#" data-toggle="modal" data-target="#videoPlayer_<?php echo $row['id']; ?>">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
            <a class="btn btn-info" href="#" data-toggle="modal" data-target="#edit_<?php echo $row['id'] ?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
             <form style = "display: inline;" action="<?= base_url("Movies_controller/deleteMovie"); ?>" method="POST">
            <button type="submit" name="movie_id" class="btn btn-danger" value="<?= $row['id']; ?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </button>
            </form>
        </td>
    </tr>

     <!-- ############################# Transparent Model Video Player MOVIES  #####################-->
    <div class="modal fade" id="videoPlayer_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="videoPlayer_<?php echo $row['id']; ?>"
         aria-hidden="true">

        <div class="modal-dialog" style="margin: auto; width: 50%; top: 20%;">
                <div class="container">
                <video controls crossorigin playsinline poster="">
                <source src="<?php echo base_url($row['src']) ?>" type="video/mp4" size="720">

                <!-- Caption files -->
                <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
                default>
                <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">
                <!-- Fallback for browsers that don't support the <video> element -->
                <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download>Download</a>
                </video>
                </div>
                <!-- Plyr resources and browser polyfills are specified in the pen settings -->

                <script type="text/javascript">
                // Change the second argument to your options:
                // https://github.com/sampotts/plyr/#options
                const player = new Plyr('video', {captions: {active: true}});

                // Expose player so it can be used from the console
                window.player = player;

                </script>
        </div>
    </div>

    <!-- ############################# EDIT MODEL FOR MOVIES  #####################-->
    <div class="modal fade" id="edit_<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="edit_<?= $row['id'] ?>"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Edit Movies</h3>
                </div>
                <div class="modal-body">
                    
                    <div class="box-content">
                <form role="form" action="<?php echo base_url("Movies_controller/updateMovies");?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Movie Name</label>
                        <input type="text" class="form-control" value="<?= $row['movie_name'] ?>" name="movie_name" placeholder="Enter Movie Name">
                    </div>

                    <input type="hidden" name="movieID" value="<?php echo $row['id']; ?>">

                    <div class="form-group">
                    <label for="exampleSelect1">Select Format</label>
                    <select class="form-control" value="<?= $row['format'] ?>" name="format">
                    <option value="mp4">mp4</option>
                    <option value="mkv">mkv</option>
                    <option value="">avi</option>
                    <option value="avi">mp3</option>
                    <option value="ogg">ogg</option>
                    </select>
                    </div>

                     <div class="form-group">
                    <label for="exampleSelect1">Select Category</label>
                    <select class="form-control" value="<?= $row['category'] ?>" name="category">
                    <option value="Action">Action</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Horror">Horror</option>
                    <option value="Sci-Fi">Sci-Fi</option>
                    </select>
                    </div>


                    <div class="form-group">
                        <label>Upload Poster</label>
                        <input type="file" name="picture">
                    </div>
                    <div class="form-group">
                        <label>Upload Movie</label>
                        <input type="file" name="movie">
                    </div>
                    <div class="form-group" >
                    <textarea name="description" rows="4" cols="50">
                        <?= $row['description'] ?>      
                    </textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>

                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    

    <?php
        }
    ?>
    
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
    
     <!-- ############################# ADD MODEL FOR MOVIES  #####################-->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Add Movies</h3>
                </div>
                <div class="modal-body">
                    
                    <div class="box-content">
                <form role="form" action="<?php echo base_url("Movies_controller/addMovies");?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Movie Name</label>
                        <input type="text" class="form-control" name="movie_name" placeholder="Enter Movie Name">
                    </div>

                    <div class="form-group">
                    <label for="exampleSelect1">Select Format</label>
                    <select class="form-control" name="format">
                    <option value="mp4">mp4</option>
                    <option value="mkv">mkv</option>
                    <option value="">avi</option>
                    <option value="avi">mp3</option>
                    <option value="ogg">ogg</option>
                    </select>
                    </div>

                     <div class="form-group">
                    <label for="exampleSelect1">Select Category</label>
                    <select class="form-control" name="category">
                    <option value="Action">Action</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Horror">Horror</option>
                    <option value="Sci-Fi">Sci-Fi</option>
                    </select>
                    </div>


                    <div class="form-group">
                        <label>Upload Poster</label>
                        <input type="file" name="picture">
                    </div>
                    <div class="form-group">
                        <label>Upload Movie</label>
                        <input type="file" name="movie">
                    </div>
                    <div class="form-group">
                    <textarea name = "description" rows="4" cols="50">

                    </textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>

                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>



</div><!--/.fluid-container-->

<script type="text/javascript">
    function openfileDialog() {
    $("#fileLoader").click();
}
</script>