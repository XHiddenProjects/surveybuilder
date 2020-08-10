<html>
<head>
<title>Remove A Folder - SurveyBuilder</title>
<link rel="shortcut icon" href="http://localhost/SurveyBuilder/favicon.ico"/>
</head>
<body>
<?php
$fold = "./Users/";
if(is_dir($fold)){

$getUser = $_POST['foldtitle'];
$Sub = $_POST['subFoldtitle'];

$dir = "./Users/" . $getUser . "/" . $Sub . "/";



rmdir($dir);


echo "Folder was removed: '" . $getUser . "/" . $Sub . "'";
}

else{
	echo "Something went wrong";
}

?>
</body>
</html>

