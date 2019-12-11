	<?php $this->load->view("extra/header.php"); ?>
	
  	  <form class="form-horizontal" action="<?php echo base_url();?>home/course_edit" method="post">
  	   <fieldset>
  	   	<input type="hidden" value="<?php echo $records[0]['id'];?>" name='id'>
  	     <legend style="padding-left:10px; color:green;">Course</legend>
  	      <div class="form-group">
  	       <label class="col-md-4 control-label" for="fname">Full Name</label>
             <div class="col-md-4">
  	           <input id="fname" name="fname" value="<?php echo $records[0]['fname'];?>" placeholder="Enter Course Full Name" class="form-control input-md" required="" type="text">
  	           </div>
  	          </div>
  	         <div class="form-group">
  	        <label class="col-md-4 control-label" for="textinput">Short Name</label>
  	       <div class="col-md-3">
  	     <input id="textinput" name="sname" value="<?php echo $records[0]['sname'];?>" placeholder="Enter Course short name" class="form-control input-md" required="" type="text">
  	        </div>
  	         </div>
  	           <!-- Multiple Radios (inline) -->
  	           	<div class="form-group">
  	           		<lavel class="col-md-4 control-label" for="total-semester">Total Semester</lavel>
  	           		<div class="col-md-4">
  	           	<?php
  	           	   for($i=1;$i<=6;$i++){
  	           	   	if($records[0]['total-semester']==$i){
  	           	   		echo "<label class='radio-inline' for='total-semester-0'>
  	           	   		<input name='total-semester' id='total-semester-0' value='".$i."' checked='checked' type='radio'>
  	           	   		".$i."
  	           	   		</lavel>";
  	           	        }
  	           	 	    else{
  	           	 		echo "<label class='radio-inline' for='total-semester-0'>
  	           	 		<input name='total-semester' id='total-semester-0' value='".$i."' type='radio'>
  	           	 		".$i."
  	           	 		</label>";
  	           	 	    }
  	           	    }
  	           	?>	
  	           </div>
  	       </div>
  	        <div class="form-group">
		  	  <lavel class="col-md-4 control-label" for="submit"></lavel>
		  	  	<div class="col-md-4">
		  	  	 <button style="width:100px;font-size:16px" id="submit" name="submit" class="btn btn-success">Save</button>
		  	  	 </div>
		  	  	</div>
		  	  </fieldset>
		  	 </form>
		  	</body>
		  </html>  	 
      <?php $this->load->view("extra/footer.php"); ?>

