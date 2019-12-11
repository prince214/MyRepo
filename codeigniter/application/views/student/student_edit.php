
<?php 
  
$this->load->view("extra/header.php");

?>
<form class="form-horizontal" method="post" action="<?php echo base_url();?>home/student_edit">
  <fieldset>
  	<legend style="padding-left:350px">Student</legend>
  	<div class="form-group">
  		<lavel class="col-md-4 control-label" for="surname">Surname</lavel>
  		<div class="col-md-3">
  			<input id="surname" name="surname" value="<?php echo $records[0]['surname'];?>" placeholder="Enter Surname" class="form-control input-md" required="" type="text">
  		</div>
  	</div>

  	<div class="form-group">
  		<lavel class="col-md-4 control-label" for="name">Name</lavel>
  		<div class="col-md-3">
  			<input id="name" name="name" value="<?php echo $records[0]['name'];?>" placeholder="Enter Name" class="form-control input-md" required="" type="text">
  			</div>
  		</div>

  		<div class="form-group">
  			<label class="col-md-4 control-label" for="radios">Gender</label>
  			<div class="col-md-3">
          <?php
              if($records[0]['gender']=="M"){
                   $checkM="checked=checked";
              }
              else{
                  $checkM="";
              }
              if($records[0]['gender']=='F'){
                  $checkF="checked=checked";
              }
              else{
                  $checkF="";
              }

          ?>
  				<label class="radio-inline" for="radios-0">
  					<input name="gender" <?php echo $checkM;?> id="radios-0" value="M" checked="checked" type="radios">
  					Male
  				</label>
  				<label class="radio-inline" for="radios-1">
  					<input name="gender" <?php echo $checkF;?> id="radios-1" value="F" type="radio">
  					Female
  				</label>
  			</div>
  		</div>

  		<div class="form-group">
  			<label class="col-md-4 control-label" for="course-id">Course</label>
  			<div class="col-md-3">
  				<select id="course-id" name="course-id" class="from-control">
  				</select>
          <?php 
              foreach($courses as $row){
                if($records[0]['course-id']==$row['id'])
                  echo "<option selected value='".$row['id']."'>".$row['fname']."</option>";
                else
                  echo "<option value='".$row['id']."'>".$row['fname']."</option>";
              } 
          ?>
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
  			<input id="bdate" name="bdate" placeholder ="Enter Birth Date" class="from-control input=md" required="" type="text">
  				
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