<?php
include('connect.php');

	$name=$_POST['name'];
    $email=$_POST['email'];
    $class=$_POST['class'];
	$age=$_POST['age'];
    
if (isset($_POST["editstudent"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $email = mysqli_real_escape_string($db_con, $_POST["email"]);
    $class= mysqli_real_escape_string($db_con, $_POST["class"]);
    $age = mysqli_real_escape_string($db_con, $_POST["age"]);
    $id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE students SET name = '$name', email = '$email', class = '$class', age = '$age' WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Student Record Updated Successfully!";
        header("Location:liststudents.php");
    }else{
        die("Something went wrong");
    }
	}

	

?>