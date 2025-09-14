<?php
include('connect.php');

	$name=$_POST['name'];
    $email=$_POST['email'];
    $class=$_POST['class'];
	$age=$_POST['age'];

if (isset($_POST["createstudent"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $email = mysqli_real_escape_string($db_con, $_POST["email"]);
    $class = mysqli_real_escape_string($db_con, $_POST["class"]);
	$age = mysqli_real_escape_string($db_con, $_POST["age"]);
    $sqlInsert = "INSERT INTO students(name,email,class,age) VALUES ('$name','$email','$class','$age')";
    if(mysqli_query($db_con,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Children Added Successfully!";
        header("Location:liststudents.php");
    }else{
        die("Something went wrong");
    }
}


    


?>