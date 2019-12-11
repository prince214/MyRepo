<?php $this->load->view("extra/header.php"); ?>

  <form class="form-horizontal" action="./course_add" method="post">
   <fieldset >
     <legend style="padding-left:10px; color:green;">Course</legend>
      <div class="form-group">
       <label class="col-md-4 control-label" for="fname">Full Name</label>
     <div class="col-md-4">
           <input id="fname" name="fname" placeholder="Enter Course Full Name" class="form-control input-md" required="" type="text">
           </div>
          </div>
         <div class="form-group">
        <label class="col-md-4 control-label" for="sname">Short Name</label>
       <div class="col-md-3">
     <input id="sname" name="sname" placeholder="Enter Course short name" class="form-control input-md" required="" type="text">
        </div>
         </div>

          <div class="form-group">
          <lavel class="col-md-4 control-label" for="total-semester">Total Semester</lavel>
          <div class="col-md-4">
  	      <label class="radio-inline" for="total-semester-0">
  	      	<input name="total-semester" id="total-semester-0" value="1" type="radio">
  	      	1
  	      </label>
  	      <label class="radio-inline" for="total-semester-1">
  	      	<input name="total-semester" id="total-semester-1" value="2" type="radio">
  	      	2
  	      </label>
  	      <label class="radio-inline" for="total-semester-2">
  	      	<input name="total-semester" id="total-semester-2" value="3" type="radio">
  	      	3
  	      </label>
  	      <label class="radio-inline" for="total-semester-2">
  	      	<input name="total-semester" id="total-semester-3" value="4" type="radio">
  	      	4
  	      </label>
  	      <label class="radio-inline" for="total-semester-2">
  	      	<input name="total-semester" id="total-semester-4" value="5" type="radio">
  	      	5
  	      </label>
  	      <label class="radio-inline" for="total-semester-2">
  	      	<input name="total-semester" id="total-semester-5" value="6" type="radio">
  	      	6
  	      </label>
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

