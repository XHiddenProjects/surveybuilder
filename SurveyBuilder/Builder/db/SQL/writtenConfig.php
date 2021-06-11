<html>
<head>
<title>SurveyBuilder-DB-Config</title>
</head>
<body>
<form method="post">
<input type="text" name="host" placeholder="ServerName(Required)" required="" value="<?php require("./config.php"); echo $host;?>"/><br/><br/>
<input type="text" name="user" placeholder="Username(Required)"  required="" value="<?php require("./config.php"); echo $user;?>"/><br/><br/>
<input type="password" name="psw" placeholder="Password"  value="<?php require("./config.php"); echo $psw;?>"/><br/><br/>
<input type="text" name="db" placeholder="Database"  value="<?php require("./config.php"); echo $db;?>"/><br/><br/>
<input type="submit" value="Save" name="savedb"/>
</form>
<?php
if(isset($_POST['savedb'])){
	$grabHost = $_POST['host'];
	$grabUser = $_POST['user'];
	$grabPSW = $_POST['psw'];
	$grabDB = $_POST['db'];
	$str = "<?php
	"."$"."host = '".$grabHost."';
	"."$"."user = '".$grabUser."';
	"."$"."psw = '".$grabPSW."';
	"."$"."db = '".$grabDB."';
	?>";
	$file = fopen('config.php', 'w+');
	fwrite($file, $str);
	fclose($file);
	echo "Saved";
}
?>
</body>
</html>