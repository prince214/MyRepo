
<?php $this->load->view("extra/header.php"); ?>

<div class="containter">
  <h2 style="padding-left:10px; color:green;">Course</h2>
    <div class="table-responsive">
      <table class="table" border="1px" style="color:red;">
      	<thead>
      		<input type="number" max="10">
          <!-- <button id="demo" >Button</button> -->
      	  <tr>
      	  	<th>#</th>
      	  	<th>Short Name</th>
      	  	<th>Full Name</th>
      	  	<th>Total Semester</th>
      	  	<th class="align-right" colspan="2">Action</th>
      	  </tr>
      	</thead>
      	<tbody>
              <!-- <p onclick="confirmation()" ></p>  -->  
      	  	<?php
      	  	   foreach($records as $row){
      	  	   		echo "<tr>";
      	  	   		echo "<td>".$row['id']."</td>";
      	  	   		echo "<td>".$row['sname']."</td>";
      	  	   		echo "<td>".$row['fname']."</td>";
      	  	   		echo "<td>".$row['total-semester']."</td>";
      	  	   		echo "<td><a href='".base_url()."home/course_delete/".$row['id']."'>Delete</a></td>";
      	  	   		echo "<td><a href='".base_url()."home/course_edit_view/".$row['id']."'>Edit</a></td>";
      	  	   		echo "</tr>";

      	  	   }
      	  	?>
    	  </tbody>
      	</table>
      </div>
      			<a href="./course_add_view" class="btn btn-primary">Add Course</a>
            <?php $this->pagination->create_links(); ?>
  </div>
</body>
</html>
<?php $this->load->view("extra/footer.php"); ?>

  <!-- Function for POP UP notification when delete Record -->
    <!-- <button onclick="myFunction()">Click me</button> -->

<!-- <script>

    var v = document.getElementById('demo').onclick(function() {var a = confirm("Are you sure?");
    if(a!=true){
      return false;
    });
    
</script> -->
  
<!-- <script>
          function doconfirm()
          {
              job=confirm("Are you sure to delete permanently?");
              if(job!=true)
              {
                  return false;
              }
          }
    </script>
 -->

  <!-- <a href="<?php //echo site_url();?>/mycontroller/delete/<?php //print($data->auc_id);?>">
   <img  src='images/delete.gif' title="Delete" onClick="return doconfirm();" >
</a> -->

  <!-- <button onclick="confirmation()" /> -->