<?php

// echo"<pre>";
// print_r($actionMovies);
?>
<section>
  
<div class="container" style="margin: 0px; padding: 0px; width: 100%; height: 50%;" >
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url("upload/temp/avenger.png"); ?>" alt="Los Angeles" style="width:100%; background-size: cover; height: 100%;">
      </div>

      <div class="item">
        <img src="chicago.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="ny.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</section>

<section>
  <style type="text/css">
    ::-webkit-scrollbar {
  width: 1px;
  height: 1px;
}

::-webkit-scrollbar-button {
  width: 1px;
  height: 1px;
}

body {
  background: #111;
}

div {
  box-sizing: border-box;
}

.horizontal-scroll-wrapper {
  /*position: absolute;*/
  display: block;
  top: 0;
  left: 0;
  width: calc(250px + 1px);
  max-height: 1138px;
  margin: 0;
  padding-top: 1px;
  /*background: #abc;*/
  overflow-y: auto;
  overflow-x: hidden;
  -webkit-transform: rotate(-90deg) translateY(-250px);
          transform: rotate(-90deg) translateY(-250px);
  -webkit-transform-origin: right top;
          transform-origin: right top;
}
.horizontal-scroll-wrapper > div {
  display: block;
  padding: 5px;
  /*background: #cab;*/
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
  -webkit-transform-origin: right top;
          transform-origin: right top;
}

.squares {
  padding: 250px 0 0 0;
}
.squares > div {
  width: 250px;
  height: 250px;
  margin: 10px 0;
}
  </style>
  <div class="container">
    <div class="row">

      
      <div class="col-sm-12" style="height: 350px;">
      <div style="background: black; padding-left: 10px;"><h3 style="color: white;">Action</h3></div>
      <div class="horizontal-scroll-wrapper squares">

        <?php 
          foreach ($actionMovies as $row) {

        ?>
      <div> <img style="height: 80%;" src="<?php echo base_url($row['poster']); ?>">
        <div><a style="color: white;" href="<?php echo base_url("Movies_controller/movieDetails") ?>?id=<?php echo $row['id']; ?>"><?php echo $row['movie_name']; ?></a></div>
      </div>
      

    <?php } ?>
      </div>
      </div>

      <div class="col-sm-12" style="height: 350px;">
      <div style="background: black; padding-left: 10px;"><h3 style="color: white;">Comedy</h3></div>
      <div class="horizontal-scroll-wrapper squares">

        <?php 
          foreach ($comedyMovies as $row) {
        ?>
     <div> <img style="height: 80%;" src="<?php echo base_url($row['poster']); ?>">
        <div><a style="color: white;" href="<?php echo base_url("Movies_controller/movieDetails") ?>?id=<?php echo $row['id']; ?>"><?php echo $row['movie_name']; ?></a></div>
      </div>

    <?php } ?>
      </div>
      </div>


      <div class="col-sm-12" style="height: 350px;">
      <div style="background: black; padding-left: 10px;"><h3 style="color: white;">Thriller</h3></div>
      <div class="horizontal-scroll-wrapper squares">

        <?php 
          foreach ($thrillerMovies as $row) {
        ?>
      <div> <img style="height: 80%;" src="<?php echo base_url($row['poster']); ?>">
        <div><a style="color: white;" href="<?php echo base_url("Movies_controller/movieDetails") ?>?id=<?php echo $row['id']; ?>"><?php echo $row['movie_name']; ?></a></div>
      </div>



    <?php } ?>
      </div>
      </div>

      

    </div>


  </div>

  

</section>