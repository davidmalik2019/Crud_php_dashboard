<?php
include('connect.php');

	$name=$_POST['name'];
    $email=$_POST['email'];
    $role=$_POST['role'];
	$phone=$_POST['phone'];

if (isset($_POST["createadmin"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $email = mysqli_real_escape_string($db_con, $_POST["email"]);
    $role = mysqli_real_escape_string($db_con, $_POST["role"]);
	$phone = mysqli_real_escape_string($db_con, $_POST["phone"]);
    $sqlInsert = "INSERT INTO admins(name,email,role,phone) VALUES ('$name','$email','$role','$phone')";
    if(mysqli_query($db_con,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Children Added Successfully!";
        header("Location:listadmins.php");
    }else{
        die("Something went wrong");
    }
}


    


?>