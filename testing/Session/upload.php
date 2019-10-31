<?php
		echo "<pre>";
		print_r($_FILES);
		// var_dump($_FILES);
		echo "</pre>";

// if(isset($_POST['uploading']))
// {
$countfiles = count($_FILES['file']['name']);
echo $countfiles;
// Upload directory
$upload_location = "uploads/";

// To store uploaded files path
$files_arr = array();

// Loop all files
for($index = 0;$index < $countfiles;$index++){

   // File name
   $filename = $_FILES['file']['name'][$index];


     // File path
     $path = $upload_location.$filename;

     // Upload file
     if(move_uploaded_file($_FILES['file']['tmp_name'][$index],$path)){
		$files_arr[] = $path;
		echo "sdfs";
	 }
	 else
	 echo"error";
   }


echo $files_arr;
echo json_encode($files_arr);
die;
// }







?>