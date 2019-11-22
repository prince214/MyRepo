<?php

header('Access-Control-Allow-Origin: *');

include 'connection.php';

$method = $_SERVER['REQUEST_METHOD'];


// if($method == 'GET'){
//     $sql = "SELECT * FROM users";
//     $result = mysqli_query($conn,$sql);
//     $rows = array();

//     if(mysqli_num_rows($result)>0){
//     	while($r = mysqli_fetch_assoc($result)){
//     		array_push($rows,$r);
//     	}

//     	print json_encode($rows);

//     }

//     else{
//     	echo "NO data";
//     }

// }




if(isset($_POST['signup'])){

    // $username = $_POST['userName'];
    // $email = $_POST['userEmail'];
    // $password = $_POST['userPassword'];


	$username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_chk = "SELECT * FROM users WHERE email='$email'";
    if(mysqli_num_rows(mysqli_query($conn,$user_chk))>0){
    	$result['message'] = 'email already exist';
    	echo json_encode($result);
    }

    else
    {
    	$sql_insert = "INSERT INTO users(id,username,email,password) VALUES (NULL,'$username','$email','$password')";

		    if(mysqli_query($conn,$sql_insert)){
		    	$result['message'] = 'inserted';
    	        echo json_encode($result);
		    }
		    else{

		    	echo "ERROR: $sql_insert". mysqli_error($conn);
		    }
    		
    }
   
}


if(isset($_POST['login'])){

	$email = $_POST['email'];
    $password = $_POST['password'];


    $user_chk = "SELECT * FROM users WHERE email='$email' and password='$password'";
		$result = $conn->query($user_chk);
		// $data = array();
		if ($result->num_rows > 0) {
		    // while($row = $result->fetch_assoc()) {
		    //    	array_push($data,$row);
		    // }	
		    // array_push($data, array('status' => "Login Success"));


		    // array_push($data->status, "login success");

		    $row = $result->fetch_assoc();
		    print json_encode($row);
		} else {
		  $result1['message'] = 'Wrong Credentials';
    	  echo json_encode($result1);
		}

	}


?>