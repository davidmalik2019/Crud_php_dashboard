<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_db"; // change this to your DB name

$db_con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db_con->connect_error) {
    die("Connection failed: " . $db_con->connect_error);
}
?>
