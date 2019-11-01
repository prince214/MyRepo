<?php
session_start();
include 'connection.php';
if(isset($_POST['add'])){

    $name = $_POST['name'];
    $position = $_POST['position'];
    $office = $_POST['office'];
    $age = $_POST['age'];
    $date = $_POST['date'];
    $salary = $_POST['salary'];

    $val = 1;
    $sql = "INSERT INTO employee (id,name,position,office,age,start_date,salary) VALUES (NULL,'$name','$position','$office','$age','$date','$salary')";
    if(mysqli_query($conn,$sql)){
        // header("location:session_start.php");
        
    }
    else
    {
        echo "error : ";
        echo $sql;
    }


    //GET LAST ID INSERTED 
    $last_id = $conn->insert_id;

    echo "lastID: ".$last_id;
    //Upload Images
    $countfiles = count($_FILES['file']['name']);
    // echo $countfiles;
    $upload_location = "uploads/";

    $files_arr = array();

    for($index = 0;$index < $countfiles;$index++){

    $filename = $_FILES['file']['name'][$index];
        

     $path = $upload_location.$filename;

     if(move_uploaded_file($_FILES['file']['tmp_name'][$index],$path)){
		$files_arr[] = $path;
        
        $add = "INSERT INTO images (image_id,user_id,images_dir) VALUES (NULL,'$last_id','$path')";
        if(mysqli_query($conn,$add)){
            echo "<script>alert('Oh yeah!!!')</script>";
            header("location:session_start.php");
            // echo "success";
            
        }
        else
        {
            echo "error : ";
            echo $add;
        }
	 }
	 else
     echo"error";
     
     }

    }//isset end





?>