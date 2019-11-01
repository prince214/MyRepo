<?php
session_start();
include 'connection.php';
$user_id = $_POST['user_id'];

if(isset($_POST['modify'])){
    $name = $_POST['name'];
    $position = $_POST['position'];
    $office = $_POST['office'];
    $age = $_POST['age'];
    $date = $_POST['date'];
    $salary = $_POST['salary'];

    $sql = "UPDATE employee SET name='$name',position='$position',office='$office',age='$age',start_date='$date',salary='$salary' WHERE id=$user_id";
    if(mysqli_query($conn,$sql)){
        // header("location:session_start.php");
        echo "got hit111";
    }
    else
    {
        echo "error : ";
        echo $sql;
    }

}

    if(isset($_POST['delete'])){
        $user_id2 = $_POST['user_id2'];

        $sql1 = "DELETE FROM images WHERE user_id=$user_id2";

        $sql = "DELETE FROM employee WHERE id=$user_id2";

        $conn->query($sql1);
        $conn->query($sql);

        if($conn){
            header("location:session_start.php");
        }
        else
        {
            echo "error : ";
            echo $sql;
        }
    }

    

    



?>