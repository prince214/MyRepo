<?php



include 'connection.php';

$id = $_POST['id'];

$sql = "SELECT * FROM product WHERE user_id = '$id'";

$result = mysqli_query($conn,$sql);

$data = array();
if ($result->num_rows > 0) {
	while ($row['data'] = $result->fetch_assoc()) {
		array_push($data, $row);
		// echo $json_string = json_encode($row['data'], JSON_PRETTY_PRINT);
		// echo $row;
	}
	// print json_encode($data);
	echo $json_string = json_encode($data, JSON_PRETTY_PRINT);
}
else
{	
	      $data['status'] = 'No Product Found';
    	  echo json_encode($data);
}







?>