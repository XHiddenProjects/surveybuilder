<?php
$dir = "storage/";
$options = "";
if(is_dir($dir)){
	$files = opendir($dir);
	if($files){
		while(($file_name = readdir($files)) !== FALSE){
			if($file_name != "." && $file_name != ".."){
			$options = $options."<option value='$file_name'>$file_name</option>";
			}
		}
	}
}
?>
<html>
<head>
<title>SurveyBuilder-Remove-Database</title>
</head>
<body>
<form method="post">
<select name="fileSelector">
<?php
echo $options;
?>
</select>
<br/>
<br/>
<input type="submit" name="removeDB" value="Delete"/>
</form>
<?php
if(isset($_POST['removeDB'])){
	$file = $_POST['fileSelector'];
	$path = "storage/".$file;
	if(!unlink($path)){
		echo "Error";
	}else{
		require("./config.php");
		
		$conn = new mysqli($host, $user, $psw);
if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}
		
		$sql = "DROP DATABASE ".str_replace(".php", "", $file);
		  if($conn->query($sql) === FALSE){
			  die('Could not delete database db_test: ' . mysql_error());
		  }
		  echo "Database deleted successfully";
	}
}
?>
</body>
</html>