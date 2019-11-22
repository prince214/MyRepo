<?php


include 'connection.php';

$id = $_POST['id'];
$product = $_POST['product'];
$price = $_POST['price'];

$sql = "INSERT INTO product (id,user_id,product,price) VALUES (NULL,'$id','$product','$price')";
$result = mysqli_query($conn,$sql);
if($result){
	$msg['status'] = 'Producted ADDED';
	echo json_encode($msg);
}
else
{
	echo "$sql";
}
	



?>