<?php
include("./Config.php");

$conn = new mysqli($servername, $username, $password);


if($conn->connect_error){
	 die("Connection failed: " . $conn->connect_error);
}
$sql = "DROP DATABASE $db";
if($conn->query($sql) === TRUE){
	echo "Database Removed";
}else{
	echo "Error occured: ".$conn->error;
}
$conn->close();
?>