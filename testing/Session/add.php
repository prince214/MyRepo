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

    $sql = "INSERT INTO employee (id,name,position,office,age,start_date,salary) VALUES (NULL,'$name','$position','$office','$age','$date','$salary')";
    if(mysqli_query($conn,$sql)){
        header("location:session_start.php");
    }
    else
    {
        echo "error : ";
        echo $sql;
    }
}


?>