<?php
echo "<head><title>SurveyBuilder-Package Uninstaller</title><link rel='shortcut icon' href='/SurveyBuilder/Builder/favicon.ico'/></head>";


$getjsonfile = file_get_contents("https://raw.githubusercontent.com/surveybuilderteams/packages/main/libs/testpackage/v0.0.1/testpackage.json");
$getcssfile = file_get_contents("https://raw.githubusercontent.com/surveybuilderteams/packages/main/libs/testpackage/v0.0.1/testpackage.css");
$getjsfile = file_get_contents("https://raw.githubusercontent.com/surveybuilderteams/packages/main/libs/testpackage/v0.0.1/testpackage.js");


//mkdir

mkdir("libs/testpackage/v0.0.1/", 0777, true);

//css file
$cssfile = fopen("libs/testpackage/v0.0.1/testpackage.css", "w+") or die("error: cannot open file");
fwrite($cssfile, $getcssfile);
fclose($cssfile);
//js file
$jsfile = fopen("libs/testpackage/v0.0.1/testpackage.js", "w+") or die("error: cannot open file");
fwrite($jsfile, $getjsfile);
fclose($jsfile);
//json file
$jsonfile = fopen("libs/testpackage/v0.0.1/testpackage.json", "w+") or die("error: cannot open file");
fwrite($jsonfile, $getjsonfile);
fclose($jsonfile);
echo "<script>window.close();</script>"; 

?>