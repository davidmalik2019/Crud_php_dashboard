<?php
include('connect.php');

	$name=$_POST['name'];
    $email=$_POST['email'];
    $role=$_POST['role'];
	$age=$_POST['phone'];
    
if (isset($_POST["editadmin"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $email = mysqli_real_escape_string($db_con, $_POST["email"]);
    $admin= mysqli_real_escape_string($db_con, $_POST["admin"]);
    $phone = mysqli_real_escape_string($db_con, $_POST["phone"]);
    $id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE admins SET name = '$name', email = '$email', role = '$role', phone = '$phone' WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Student Record Updated Successfully!";
        header("Location:listadmins.php");
    }else{
        die("Something went wrong");
    }
	}

	

?>