<?php
include("./Config.php");

$fname = $_POST['fName'];
$lname = $_POST['lName'];
$user = $_POST['user'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$ip = $_SERVER['REMOTE_ADDR'];

$conn = new mysqli($servername, $username, $password, $db);


if($conn->connect_error){
	 die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (first, last, user, email, psw, ip) VALUES ('$fname', '$lname', '$user', '$email', '$psw', '$ip')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>