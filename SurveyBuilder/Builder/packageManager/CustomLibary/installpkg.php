<?php

$js = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/CustomLibary/package.js");
$json = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/CustomLibary/package.json");

$dataJS = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/CustomLibary/package.js", "w+");
fwrite($dataJS, $js);
$dataJSON = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/CustomLibary/package.json", "w+");
fwrite($dataJSON, $json);

echo "package fully installed";

?>