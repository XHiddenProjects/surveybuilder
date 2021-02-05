<?php
if(!unlink($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/TestPackage/package.html")){
	echo "failed to delete package.html<br/>";
}
if(!unlink($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/TestPackage/package.css")){
	echo "failed to delete package.css<br/>";
}
if(!unlink($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/TestPackage/package.js")){
	echo "failed to delete package.js<br/>";
}
if(!unlink($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/TestPackage/package.json")){
	echo "failed to delete package.json<br/>";
}
?>