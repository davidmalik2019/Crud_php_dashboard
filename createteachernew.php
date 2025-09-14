<?php
include('connect.php');

	$name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
	$phone=$_POST['phone'];

if (isset($_POST["createteacher"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $email = mysqli_real_escape_string($db_con, $_POST["email"]);
    $subject = mysqli_real_escape_string($db_con, $_POST["subject"]);
	$phone = mysqli_real_escape_string($db_con, $_POST["phone"]);
    $sqlInsert = "INSERT INTO teachers(name,email,subject,phone) VALUES ('$name','$email','$subject','$phone')";
    if(mysqli_query($db_con,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Children Added Successfully!";
        header("Location:list.php");
    }else{
        die("Something went wrong");
    }
}


    


?>