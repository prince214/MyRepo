
<?php $this->load->view("extra/header.php"); ?>
  <form class="form-horizontal">
    <form class="form-horizontal" method="post" action="<?php echo base_url();?>home/student_add">
    <fieldset>
  	 <legend style="padding-left:10px; color:green;">Student</legend>
  	  <div class="form-group">
  		<lavel class="col-md-4 control-label" for="surname">Surname</lavel>
  		  <div class="col-md-3">
  			<input id="surname" name="surname" placeholder="Enter Surname" class="form-control input-md" required="" type="text">
  		  </div>
  	    </div>
  	  <div class="form-group">
  	    <lavel class="col-md-4 control-label" for="name">Name</lavel>
  		  <div class="col-md-3">
  			<input id="name" name="name" placeholder="Enter Name" class="form-control input-md" required="" type="text">
  			 </div>
  		      </div>
  		      <div class="form-group">
  			 <label class="col-md-4 control-label" for="radios">Gender</label>
  			<div class="col-md-3">
  		  <label class="radio-inline" for="radios-0">
  		<input name="gender" id="radios-0" value="M" checked="checked" type="radios">
  	  Male
  	</label>
  	 <label class="radio-inline" for="radios-1">
  	   <input name="gender" id="radios-1" value="F" type="radio">
  		 Female
  		   </label>
  			</div>
  		     </div>
  		      <div class="form-group">
  			<label class="col-md-4 control-label" for="course-id">Course</label>
  		   <div class="col-md-3">
  		  <select id="course-id" name="course-id" class="from-control">
          <?php  
                foreach($records as $row){
                  echo "<option value='".$row['id']."'>".$row['fname']."</option>";
                }
          ?>
  		</select>
  	  </div>
  		</div>
  		  <div class="form-group">
  			<label class="col-md-4 control-label" for="course-id">City</label>
  			<div class="col-md-3">
  			  <input id="city" name="city" value="<?php echo $records[0]['city'];?>" placeholder="Enter City" class="from-control input-md" required="" type="text">
  			   </div>
  		        </div>
  		      <div class="form-group">
  		    <label class="col-md-4 control-label" for="course-id">Birth Date</label>
  		  <div class="col-md-3">
  		<input id="bdate" name="bdate" value="<?php echo $records[0]['bdate'];?>" placeholder ="Enter Birth Date" class="from-control input=md" required="" type="text">
  	 </div>
  	  </div>
  		<div class="form-group">
  		 <label class="col-md-4 control-label" for="submit"></label>
  		  <div class="col-md-4">
  			<button style="width:100px;front-size:16px" id="submit" name="submit" class="btn btn-success">Save</button>	
  			</div>
  		  </div>
  	    </fieldset>
      </form>
    </body>
</html>