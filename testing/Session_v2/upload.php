<?php
		echo "<pre>";
		print_r($_FILES);
		echo "</pre>";

$countfiles = count($_FILES['file']['name']);
echo $countfiles;
$upload_location = "uploads/";

$files_arr = array();

for($index = 0;$index < $countfiles;$index++){

   $filename = $_FILES['file']['name'][$index];


     $path = $upload_location.$filename;

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







?>