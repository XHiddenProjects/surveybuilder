<?php
$title = $_POST['title'];

fopen("./storage/$title.php", "a");
//Update URL to hosting service
echo "Database created";
//Create DataBase
require("./config.php");

$conn = new mysqli($host, $user, $psw);
if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE ".$title;
if ($conn->query($sql) === TRUE) {
  //echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>