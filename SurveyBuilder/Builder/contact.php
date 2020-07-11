<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "surveybuilder";
//List
$Fname = $_POST["Fname"];
$Lname = $_POST["Lname"];
$email = $_POST["email"];
$message = $_POST["message"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO message (Fname, Lname, email, Message) VALUES ('$Fname', '$Lname', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Thanks for the Feedback<br><br>";
    echo "<button><a href='SurveyBuilder%5bPage%202%5d.html'>Back</a></button>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
