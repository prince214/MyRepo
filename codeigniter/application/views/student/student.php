
<?php $this->load->view("extra/header.php"); ?>

<div class="container">
 <h2>Student</h2>
  <div class="table-responsive">
	 <table class="table">
	 	<thead>
	 	  <tr>
	 	  	<th>#</th>
	 	  	<th>Course</th>
	 	  	<th>Surname</th>
	 	  	<th>Name</th>
	 	  	<th>Gender</th>
	 	  	<th>City</th>
	 	  	<th>Birth Date</th>
	 	  </tr>
	 	</thead>
	 	<tbody>
	 	  <?php
      	  	   foreach($records as $row){
      	  	   		echo "<tr>";
      	  	   		echo "<td>".$row['id']."</td>";
      	  	   		echo "<td>".$row['sname']."</td>";
      	  	   		echo "<td>".$row['surname']."</td>";
      	  	   		echo "<td>".$row['name']."</td>";
      	  	   		if($row['gender']=="M"){
      	  	   			$row['gender']="Male";
      	  	   		}
      	  	   		else{
      	  	   			$row['gender']="Female";
      	  	   		}
      	  	   		
      	  	   		echo "<td>".$row['gender']."</td>";
      	  	   		echo "<td>".$row['city']."</td>";
     	  	   		echo "<td>".$row['bdate']."</td>";
      	  	   		
      	  	   		echo "<td><a href='".base_url()."home/student_delete/".$row['id']."'>Delete</a></td>";
      	  	   		echo "<td><a href='".base_url()."home/student_edit_view/".$row['id']."'>Edit</a></td>";
      	  	   		echo "</tr>";

      	  	   }
      	  	?>
	 	</tbody>
	 </table>
	 		<a href="<?php echo base_url();?>home/student_add_view" class="btn btn-primary">Add Student</a>
	</div>
</div>
</body>
</html>
