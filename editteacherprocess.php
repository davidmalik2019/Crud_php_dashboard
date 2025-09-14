<?php
include('connect.php');

	$name=$_POST['name'];
    $email=$_POST['email'];
    $class=$_POST['subject'];
	$age=$_POST['phone'];
    
if (isset($_POST["editteacher"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $email = mysqli_real_escape_string($db_con, $_POST["email"]);
    $subject= mysqli_real_escape_string($db_con, $_POST["subject"]);
    $phone = mysqli_real_escape_string($db_con, $_POST["phone"]);
    $id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE teachers SET name = '$name', email = '$email', subject = '$subject', phone = '$phone' WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Student Record Updated Successfully!";
        header("Location:list.php");
    }else{
        die("Something went wrong");
    }
	}

	

?>