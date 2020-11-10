<?php
echo "<head><title>getAPI - SurveyBuilder</title><link rel='shortcut icon' href='favicon.ico'/></head>";

$char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$gen = substr(str_shuffle($char),0,350);

$file = "./API.txt";
if(is_file($file)){
echo "You already have this file";
}
else{
$fileSet = fopen("$file", "w+");
fwrite($fileSet, "$gen");
fclose($fileSet);	
echo "File was created";
}
?>