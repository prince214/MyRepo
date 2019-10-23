<?php



if($_SERVER["REQUEST_METHOD"] == "POST") {
    // if(isset($_POST['add'])){

        
        // die();


        $name = $_POST['name'];
        $position = $_POST['position'];
        $office = $_POST['office'];
        $age = $_POST['age'];
        $date = $_POST['date'];
        $salary = $_POST['salary'];

        $sql = "INSERT INTO employee (id,name,position,office,age,start_date,salary) VALUES (NULL,'$name','$position','$office','$age','$date','$salary')";
        echo"asfdsf";
        if(mysqli_query($asfd,$sql)){
            echo "success";
        }
        else
        {
            echo $sql;
        }
    }

?>