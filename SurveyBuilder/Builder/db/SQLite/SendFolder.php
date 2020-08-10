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
$sub = $_POST['subFoldtitle'];

$dir = "./Users/" . $getUser . "/";
mkdir($dir);

$subt = $dir . $sub . "/"; 
mkdir($subt);


echo "Folder was created: '" . $getUser . "/" . $sub . "'";
}else{
	echo "Something went wrong";
}
?>
</body>
</html>