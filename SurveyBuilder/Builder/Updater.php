<?php
$getVersion = $_GET['https://raw.githubusercontent.com/surveybuilderteams/surveybuilder/master/SurveyBuilder/Builder/System.json'];
$getUpdatedFile = $_GET['https://raw.githubusercontent.com/surveybuilderteams/surveybuilder/master/SurveyBuilder/Builder/SurveyBuilder.php'];

//JSON FILE

$fileJson = fopen("System.json", "w+") or die("Cannot open file");
fwrite($fileJson, $getVersion);
fclose($fileJson);

//UPDATER

$fileUpdater = fopen("SurveyBuilder.php");
fwrite($fileUpdater, $getUpdatedFile);
fclose($fileUpdater);

echo "<script>setTimeout(function(){window.open('SurveyBuilder.php')}, 3000);</script>";
?>