<?php
$files = glob($_SERVER['DOCUMENT_ROOT'].'/SurveyBuilder/Builder/Installedpackage/IP_Storage/lib/ips/*'); //get all file names
foreach($files as $file){
    if(is_file($file)){
		unlink($file); //delete file
	}
    
}

rmdir($_SERVER['DOCUMENT_ROOT'].'/SurveyBuilder/Builder/Installedpackage/IP_Storage/lib/ips');

$files1 = glob($_SERVER['DOCUMENT_ROOT'].'/SurveyBuilder/Builder/Installedpackage/IP_Storage/lib/*'); //get all file names
foreach($files1 as $file1){
    if(is_file($file1)){
		unlink($file1); //delete file
	}
    
}
rmdir($_SERVER['DOCUMENT_ROOT'].'/SurveyBuilder/Builder/Installedpackage/IP_Storage/lib');

$files2 = glob($_SERVER['DOCUMENT_ROOT'].'/SurveyBuilder/Builder/Installedpackage/IP_Storage/*'); //get all file names
foreach($files2 as $file2){
    if(is_file($file2)){
		unlink($file2); //delete file
	}
    
}
echo "Package uninstalled successfully";
?>
