<?php
include("./config.php");

$auth = $_POST['auth'];
$psw = $_POST['auth_psw'];

$conn = new mysqli($servername, $username, $password, $db);

$sql = "SELECT * FROM users WHERE user='$auth' OR email='$auth' AND psw='$psw'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "hi";
  }
} else {
  echo "0 results";
}
$conn->close();

?>