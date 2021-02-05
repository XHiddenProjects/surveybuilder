<?php

$html = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/TestPackage/package.html");
$css = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/TestPackage/package.css");
$js = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/TestPackage/package.js");
$json = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/TestPackage/package.json");

$dataHTML = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/TestPackage/package.html", "w+");
fwrite($dataHTML, $html);
$dataCSS = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/TestPackage/package.css", "w+");
fwrite($dataCSS, $css);
$dataJS = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/TestPackage/package.js", "w+");
fwrite($dataCSS, $js);
$dataCSS = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/TestPackage/package.json", "w+");
fwrite($dataCSS, $json);

echo "package fully installed";

?>