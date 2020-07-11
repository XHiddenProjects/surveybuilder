<?php

$char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$gen = substr(str_shuffle($char),0,8);
$txt = $_POST['Console'];
//Creates a file on your website
//Use 'Block comment(no double slashs)' to cancel the sharing process
//htdocs is the main course...
//ex:

//- http(s)://example.example/Console/Generated-file
//- http(s)://subexample.example.example/Console/Generated-file


//Sharing to others your log Console
$stat = "Console-" . $gen . ".txt";

$set = fopen("$stat", "w+");
fwrite($set, $txt);
fclose($set);
echo "location: http://localhost/SurveyBuilder/Console/" . $stat;

//End the code here
?>