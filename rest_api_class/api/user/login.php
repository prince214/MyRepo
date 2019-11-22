<?php

include_once '../config/database.php';
include_once '../objects/user.php';

//get database connection
$database = new Database();
$db = $database->getConnection();

$user = new User($db);


//set ID property of user to be edited
$user->username = isset($_GET['username']) ? $_GET['username'] : die();
$user->password = isset($_GET['password']) ? $_GET['password'] : die();

//read the details of user to be edited
$stmt = $user->login();

if($stmt->rowCount()>0){

	$row = $stmt->fetch(PDO::FETCH_ASSOC);

	//Create array
	$user_arr = array(
		"status" =>true,
		"message" =>"Succesfully Login!",
		"id" => $row['id'],
		"username" =>$row['username']
	);
}
else
{
	$user_arr = array(
		"status" => false,
		"message" => "Invalid Username or Password!",
	);
}

print_r(json_encode($user_arr));
?>