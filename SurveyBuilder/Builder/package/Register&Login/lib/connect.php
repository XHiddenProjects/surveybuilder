<?php
include("./config.php");

$conn = new mysqli($servername, $username, $password);


if($conn->connect_error){
	 die("Connection failed: " . $conn->connect_error);
}
$database = "CREATE DATABASE $db";
if($conn->query($database) === TRUE){
	echo "Database created";
}else{
	echo "Error occured: ".$conn->error;
}
$conn->close();
$Newconn = new mysqli($servername, $username, $password, $db);
$table = "CREATE TABLE users(
id INT(0) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
first VARCHAR(30) NOT NULL,
last VARCHAR(30) NOT NULL,
user VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
psw  VARCHAR(50) NOT NULL,
ip VARCHAR(50) NOT NULL,
account_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if($Newconn->query($table) === TRUE){
	echo "<br/>table created";
}else{
	echo "<br/>Error occured: ".$Newconn->error;
}
$Newconn->close();

?>