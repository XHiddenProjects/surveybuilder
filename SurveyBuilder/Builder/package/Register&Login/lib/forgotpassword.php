<?php
include("./config.php");

$auth = $_POST['auth'];
$Newpsw = $_POST['new_psw'];



$conn = new mysqli($servername, $username, $password, $db);

$sql = "UPDATE users SET psw='$Newpsw' WHERE user='$auth' OR email='$auth'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}


$conn->close();

?>