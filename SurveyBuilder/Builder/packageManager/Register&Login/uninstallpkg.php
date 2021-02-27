<?php
$files = glob($_SERVER['DOCUMENT_ROOT'].'/SurveyBuilder/Builder/Installedpackage/Register&Login/*'); //get all file names
foreach($files as $file){
    if(is_file($file)){
		unlink($file); //delete file
	} 
}
$files1 = glob($_SERVER['DOCUMENT_ROOT'].'/SurveyBuilder/Builder/Installedpackage/Register&Login/lib/*'); //get all file names
foreach($files1 as $file){
    if(is_file($file)){
		unlink($file); //delete file
	} 
}
$files2 = glob($_SERVER['DOCUMENT_ROOT'].'/SurveyBuilder/Builder/Installedpackage/Register&Login/style/*'); //get all file names
foreach($files2 as $file){
    if(is_file($file)){
		unlink($file); //delete file
	} 
}
$files3 = glob($_SERVER['DOCUMENT_ROOT'].'/SurveyBuilder/Builder/Installedpackage/Register&Login/script/*'); //get all file names
foreach($files3 as $file){
    if(is_file($file)){
		unlink($file); //delete file
	} 
}
//remove folders
rmdir($_SERVER['DOCUMENT_ROOT'].'/SurveyBuilder/Builder/Installedpackage/Register&Login/lib');
rmdir($_SERVER['DOCUMENT_ROOT'].'/SurveyBuilder/Builder/Installedpackage/Register&Login/style');
rmdir($_SERVER['DOCUMENT_ROOT'].'/SurveyBuilder/Builder/Installedpackage/Register&Login/script');
echo "Package uninstalled successfully";
?>