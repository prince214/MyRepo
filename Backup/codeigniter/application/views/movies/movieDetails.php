<?php

// echo "<pre>";
print_r($getUser);
// print_r($movieInfo);

// die();


?>

<style type="text/css">
	
	h4{
		display: inline;
	}

 * {
 	margin: 0;
 	padding: 0;
 	-webkit-box-sizing: border-box;
 	-moz-box-sizing: border-box;
 	box-sizing: border-box;
 }

 a {
 	color: #03658c;
 	text-decoration: none;
 }

ul {
	list-style-type: none;
}

body {
	font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;
	background: #dee1e3;
}

/** ====================
 * Lista de Comentarios
 =======================*/
.comments-container {
	margin: 60px auto 15px;
	width: 768px;
}

.comments-container h1 {
	font-size: 36px;
	color: #283035;
	font-weight: 400;
}

.comments-container h1 a {
	font-size: 18px;
	font-weight: 700;
}

.comments-list {
	margin-top: 30px;
	position: relative;
}

/**
 * Lineas / Detalles
 -----------------------*/
.comments-list:before {
	content: '';
	width: 2px;
	height: 100%;
	background: #c7cacb;
	position: absolute;
	left: 32px;
	top: 0;
}

.comments-list:after {
	content: '';
	position: absolute;
	background: #c7cacb;
	bottom: 0;
	left: 27px;
	width: 7px;
	height: 7px;
	border: 3px solid #dee1e3;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
}

.reply-list:before, .reply-list:after {display: none;}
.reply-list li:before {
	content: '';
	width: 60px;
	height: 2px;
	background: #c7cacb;
	position: absolute;
	top: 25px;
	left: -55px;
}


.comments-list li {
	margin-bottom: 15px;
	display: block;
	position: relative;
}

.comments-list li:after {
	content: '';
	display: block;
	clear: both;
	height: 0;
	width: 0;
}

.reply-list {
	padding-left: 88px;
	clear: both;
	margin-top: 15px;
}
/**
 * Avatar
 ---------------------------*/
.comments-list .comment-avatar {
	width: 65px;
	height: 65px;
	position: relative;
	z-index: 99;
	float: left;
	border: 3px solid #FFF;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	overflow: hidden;
}

.comments-list .comment-avatar img {
	width: 100%;
	height: 100%;
}

.reply-list .comment-avatar {
	width: 50px;
	height: 50px;
}

.comment-main-level:after {
	content: '';
	width: 0;
	height: 0;
	display: block;
	clear: both;
}
/**
 * Caja del Comentario
 ---------------------------*/
.comments-list .comment-box {
	width: 680px;
	float: right;
	position: relative;
	-webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
	-moz-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
	box-shadow: 0 1px 1px rgba(0,0,0,0.15);
}

.comments-list .comment-box:before, .comments-list .comment-box:after {
	content: '';
	height: 0;
	width: 0;
	position: absolute;
	display: block;
	border-width: 10px 12px 10px 0;
	border-style: solid;
	border-color: transparent #FCFCFC;
	top: 8px;
	left: -11px;
}

.comments-list .comment-box:before {
	border-width: 11px 13px 11px 0;
	border-color: transparent rgba(0,0,0,0.05);
	left: -12px;
}

.reply-list .comment-box {
	width: 610px;
}
.comment-box .comment-head {
	background: #FCFCFC;
	padding: 10px 12px;
	border-bottom: 1px solid #E5E5E5;
	overflow: hidden;
	-webkit-border-radius: 4px 4px 0 0;
	-moz-border-radius: 4px 4px 0 0;
	border-radius: 4px 4px 0 0;
}

.comment-box .comment-head i {
	float: right;
	margin-left: 14px;
	position: relative;
	top: 2px;
	color: #A6A6A6;
	cursor: pointer;
	-webkit-transition: color 0.3s ease;
	-o-transition: color 0.3s ease;
	transition: color 0.3s ease;
}

.comment-box .comment-head i:hover {
	color: #03658c;
}

.comment-box .comment-name {
	color: #283035;
	font-size: 14px;
	font-weight: 700;
	float: left;
	margin-right: 10px;
}

.comment-box .comment-name a {
	color: #283035;
}

.comment-box .comment-head span {
	float: left;
	color: #999;
	font-size: 13px;
	position: relative;
	top: 1px;
}

.comment-box .comment-content {
	background: #FFF;
	padding: 12px;
	font-size: 15px;
	color: #595959;
	-webkit-border-radius: 0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;
}

.comment-box .comment-name.by-author, .comment-box .comment-name.by-author a {color: #03658c;}
.comment-box .comment-name.by-author:after {
	content: 'autor';
	background: #03658c;
	color: #FFF;
	font-size: 12px;
	padding: 3px 5px;
	font-weight: 700;
	margin-left: 10px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}

/** =====================
 * Responsive
 ========================*/
@media only screen and (max-width: 766px) {
	.comments-container {
		width: 480px;
	}

	.comments-list .comment-box {
		width: 390px;
	}

	.reply-list .comment-box {
		width: 320px;
	}
}

.userComment{
		box-shadow: 10px;
		width: 722px;
		border: 0;
		height: 40px;
		padding: 20px;
	}

.userReplyBar{
	box-shadow: 10px;
		width: 680px;
		border: 0;
		height: 40px;
		padding: 20px;
}



</style>
<div class="container">

	<div class="row">
		

		 <?php foreach ($movieInfo as $row){
        ?>
		<div class="col-sm-12" style="margin-top: 30px;">
			<div class="col-sm-3" style="height: 300px;">
				<img  height="100%" src="<?php echo base_url($row['poster']); ?>">
			</div>

			<div class="col-sm-9" class="stat">
				<div><h4>Movie Name:</h4> <?php echo $row['movie_name'] ?></div>
				<div><h4>Category:</h4> <?php echo $row['category'] ?></div>
				<div><h4>Format:</h4> <?= $row['format'] ?></div>
				<div><h4>Rating:</h4> </div>

				<div>

			<!-- <button type="submit" name="watch_online" class="btn btn-warning"data-toggle="modal" data-target="#videoPlayer">
                <i class="glyphicon glyphicon-play icon-white"></i>
                Watch Online
            </button> -->

            <a class="btn btn-warning" data-toggle="modal" data-target="#videoPlayer">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Watch Online
            </a>

            <a href="<?php echo base_url($row['src']) ?>" class="btn btn-success"  download>
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Download
            </a>


			  </div>


			  <div>

			<button type="submit" name="watch_online" class="btn btn-warning" value="">
                <i class="glyphicon glyphicon-thumbs-up icon-white"></i>
                Like
            </button>

            <div class="raty"></div>

			  </div>

			</div>
		</div>
		<div class="col-sm-12">
			<div>
				<h2>Description:</h2>
				<?= $row['description'] ?> </div>


			




			<!-- ####################### Comments section ##########################-->
			<div><hr/>


<!-- Contenedor Principal -->
	<div class="comments-container">
		<h1>COMMENTS </h1>
		<div>
			<img style="display: inline;" width="40" height="40" src="<?php echo base_url("upload/temp/profile.jpg") ?>">
			
				<input data-movieID="<?php echo $movieInfo[0]['id']; ?>" data-id="<?php echo $_SESSION['id'] ?>" style="display: inline;" id="userComment" class="userComment" type="input" >
			
			
		</div>
		
		<ul id="comments-list" class="comments-list">
			<li>

				<!-- IF COMMENTS == TRUE #THEN SHOW -->
				<div class="comment-main-level">
					<!-- Avatar -->
					<div class="comment-avatar"><img src="<?php echo base_url("upload/temp/profile.jpg") ?>" alt=""></div>
					
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>
							<span>hace 20 minutos</span>
							<i class="fa fa-reply on-reply"></i>
							<i id="" class="fa fa-heart test"></i>
						</div>
						<div class="comment-content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
						</div>
					</div>
				</div>	
				<span id="reply-listing"></span>
								<!-- if comments_reply == TRUE #THEN SHOW -->
								<!-- Reply comments -->
								<ul class="comments-list reply-list">
									<li>
										<!-- Avatar -->
										<div class="comment-avatar"><img src="<?php echo base_url("upload/temp/profile.jpg") ?>" alt=""></div>
										
										<div class="comment-box">
											<div class="comment-head">
												<h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a></h6>
												<span>hace 10 minutos</span>
												<i class="fa fa-reply"></i>
												<i class="fa fa-heart test"></i>
											</div>
											<div class="comment-content">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
											</div>
										</div>
									</li>
								</ul>
			</li>
			<span id="testing"></span>
		</ul>
	</div>
				
			</div>
		</div>

		<!-- ############################# Transparent Model Video Player MOVIES  #####################-->
    <div class="modal fade" id="videoPlayer" tabindex="-1" role="dialog" aria-labelledby="videoPlayer"
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



	<?php } ?>
	</div>

</div>




<script type="text/javascript">

$(document).ready(function() {

	//Like Button
	$('.test').click(function(){
           $(this).css("color", "red");
	});


	//Reply Bar
	$('.on-reply').click(function(){
		console.log("Fasdf");
		const board_id = document.getElementById('reply-listing');

		const input_area = `<ul class="comments-list reply-list"><li>
							<input data-movieID="<?php echo $movieInfo[0]['id']; ?>" data-id="<?php echo $_SESSION['id'] ?>" style="display: inline;" id="userReply<?php echo $_SESSION['id']  ?>" id="userReplyBar<?php echo $_SESSION['id'] ?>" class="userReplyBar" placeholder="Enter Your Reply ..." type="input" ></li></ul>`;
		 const position = "beforeend";
    	 board_id.insertAdjacentHTML(position,input_area);


  //   	 document.querySelector('#userReplyBar<?php echo $_SESSION['id'] ?>').addEventListener('keypress', function (e) {
		//     if (e.key === 'Enter') {
		//      console.log("fasfd");
		//     }
		// });
 console.log("asdfasf");
		$('#userReplyBar<?php echo $_SESSION['id'] ?>').on('keypress', 'span', function(e){
    		
    		 console.log("asdfasf");
		});
		 
   //  	 document.addEventListener("click", function(){
		 // $('#userReplyBar<?php echo $_SESSION['id'] ?>').keypress(function (e) {
		 // var key = e.which;
		 // if(key == 13)  // the enter key code
		 //  {

		 //  	var userReply = $('#userReply<?php echo $_SESSION['id'] ?>').val();
		 // console.log(userReply);

		 //  	const item = `
			// <ul class="comments-list reply-list">
			// <li>
			// <!-- Avatar -->
			// <div class="comment-avatar"><img src="<?php echo base_url("upload/temp/profile.jpg") ?>" alt=""></div>

			// <div class="comment-box">
			// <div class="comment-head">
			// <h6 class="comment-name "><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>
			// <span>hace 10 minutos</span>
			// <i class="fa fa-reply"></i>
			// <i class="fa fa-heart"></i>
			// </div>
			// <div class="comment-content">
			// Lorem ipsum: ${userReply}
			// </div>
			// </div>
			// </li>
			// </ul>
   //  		`;
   //  		const position = "beforeend";
   //  		board_id.insertAdjacentHTML(position,item);

		 //  }

           
   
});



	//Inserting comments by users
	$('#userComment').keypress(function (e) {
	 var key = e.which;
	 if(key == 13)  // the enter key code
	  {
	    var userComment = $('#userComment').val();
	    var user_id = $(this).attr("data-id");
	    var movieID = $(this).attr("data-movieID");
	    const board_id = document.getElementById('testing');

	    $.ajax({
        type: 'POST',
        url: '<?= base_url("Movies_controller/addUserComment") ?>',
        data: { userComment: userComment, user_id: user_id, movieID: movieID },
        dataType:"JSON",
        success: function(data) {

           	if (data.status == '200' ) 
           	{	
           		
           		const item = `
           		<li>
					<div class="comment-main-level">
					<!-- Avatar -->
					<div class="comment-avatar"><img src="<?php echo base_url("upload/temp/profile.jpg") ?>" alt=""></div>
					
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name"><?php echo $getUser[0]['username']; ?></h6>
							<span>hace 20 minutos</span>
							<i class="fa fa-reply"></i>
							<i class="fa fa-heart"></i>
						</div>
						<div class="comment-content">
							${data.userComment}
						</div>
					</div>
				</div>	

				<span class="reply-section">
								
				</span>
				</li>

    `;
    const position = "beforeend";
    board_id.insertAdjacentHTML(position,item);

           		//ALSO CHECK IF THE SAME USER IS LOGGED IN WHO'S SERVER RESPONSE IS COMMING
           		//APPEND HTML CODE WITH USER-COMMENT
           		
           	}
            
        }
    	});


	  }
});   

});  




</script>

