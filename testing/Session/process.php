<?php 

	include 'connection.php';
	
	if(isset($_POST['register'])){

		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$table_name = $_POST['table_name'];
		$token = md5(uniqid($username, true));  //GENERATING RANDOM UNIQUE TOKEN
		
		$sql_username = "SELECT * FROM users WHERE username = '$username'";
		$sql_email = "SELECT * FROM users WHERE email = '$email'";
		$sql_table_name = "SELECT * FROM users WHERE table_name = '$table_name'";

		$error_1 = mysqli_query($conn,$sql_username) or die(mysqli_error($conn));
		$error_2 = mysqli_query($conn,$sql_email) or die(mysqli_error($conn));
		$error_3 = mysqli_query($conn,$sql_table_name) or die(mysqli_error($conn));
		

		if(mysqli_num_rows($error_1)>0){
			$username_error = "Username already taken !!";
		}
		else if(mysqli_num_rows($error_2)>0){
			$email_error = "Email already in use !!";
		}
		else if(mysqli_num_rows($error_3)>0){
			$table_name_error = "Table Name already taken !!";
		}
		else{

			$query = "INSERT INTO users (id,email,password,table_name,username,token) 
					VALUES (NULL,'$email','".md5($password)."','$table_name','$username','$token')";
			$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
			header("location:index.php");
			exit();
		}

	}

?>