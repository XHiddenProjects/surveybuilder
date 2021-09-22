<?php

$getIP = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/IP_Storage/lib/getIP.php");
$json = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/IP_Storage/package.json");
$note = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/IP_Storage/lib/ips/note.txt");


mkdir($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/IP_Storage/lib/ips", 0777, true);

$dataPhp = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/IP_Storage/lib/getIP.php", "w+");
fwrite($dataPhp, $getIP);
$dataJSON = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/IP_Storage/package.json", "w+");
fwrite($dataJSON, $json);
$dataNote = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/IP_Storage/lib/ips/note.txt", "w+");
fwrite($dataNote, $note);

echo "package fully installed";

?>