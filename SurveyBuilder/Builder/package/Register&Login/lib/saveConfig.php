<?php
$server = $_POST['serverName'];
$user = $_POST['username'];
$psw = $_POST['password'];
$db = $_POST['db'];

$file = fopen("./config.php", "w");
fwrite($file, "<?php $".'servername="'.$server.'";$'.'username="'.$user.'";$'.'password="'.$psw.'";$'.'db="'.$db.'";?>');
fclose($file);
echo "Config Saved";


?>