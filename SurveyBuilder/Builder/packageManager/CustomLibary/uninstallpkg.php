<?php
$files = glob($_SERVER['DOCUMENT_ROOT'].'/SurveyBuilder/Builder/Installedpackage/CustomLibary/*'); //get all file names
foreach($files as $file){
    if(is_file($file)){
		unlink($file); //delete file
	}
    
}
echo "Package uninstalled successfully";
?>
