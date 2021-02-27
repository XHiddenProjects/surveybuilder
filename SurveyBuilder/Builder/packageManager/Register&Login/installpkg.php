<?php

$Loginhtml = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/Register&Login/login.html");
$RegisterHTML = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/Register&Login/register.html");
$ForgotPassword = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/Register&Login/forgotpassword.html");
$css = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/Register&Login/style/style.css");
$js = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/Register&Login/script/script.js");
$json = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/Register&Login/package.json");
$setup = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/Register&Login/script/setup.js");
$config = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/Register&Login/lib/config.php");
$connect = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/Register&Login/lib/connect.php");
$forgotPsw = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/Register&Login/lib/forgotpassword.php");
$login = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/Register&Login/lib/Login.php");
$register = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/Register&Login/lib/Register.php");
$saveConfig = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/Register&Login/lib/saveConfig.php");
$settings = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/Register&Login/lib/settings.php");
$uninstall = file_get_contents($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/package/Register&Login/lib/uninstall.php");

/*
$dataCSS = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/Register&Login/package.json", "w+");
fwrite($dataCSS, $json);
*/
//create folders
mkdir($_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/Installedpackage/Register&Login/style/", 0777, true);
mkdir($_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/Installedpackage/Register&Login/script/", 0777, true);
mkdir($_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/Installedpackage/Register&Login/lib/", 0777, true);
//run script
echo "package fully installed";
$rootLogin = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/Register&Login/login.html", "w+");
fwrite($rootLogin, $Loginhtml);
$rootRegister = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/Register&Login/register.html", "w+");
fwrite($rootRegister, $RegisterHTML);
$rootForgotPswHTML = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/Register&Login/forgotpassword.html", "w+");
fwrite($rootForgotPswHTML, $ForgotPassword);
$rootCSS = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/Register&Login/style/style.css", "w+");
fwrite($rootCSS, $css);
$rootJS = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/Register&Login/script/script.js", "w+");
fwrite($rootJS, $js);
$rootJSON = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/Register&Login/package.json", "w+");
fwrite($rootJSON, $json);
$rootSetup = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/Register&Login/script/setup.js", "w+");
fwrite($rootSetup, $setup);
$rootConfig = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/Register&Login/lib/config.php", "w+");
fwrite($rootConfig, $config);
$rootConnect = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/Register&Login/lib/connect.php", "w+");
fwrite($rootConnect, $connect);
$rootForgotPsw = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/Register&Login/lib/forgotPsw.php", "w+");
fwrite($rootConfig, $config);
$root_login = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/Register&Login/lib/Login.php", "w+");
fwrite($root_login, $login);
$root_register = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/Register&Login/lib/Register.php", "w+");
fwrite($root_register, $register);
$rootSaveConfig = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/Register&Login/lib/saveConfig.php", "w+");
fwrite($rootSaveConfig, $saveConfig);
$rootSettings = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/Register&Login/lib/settings.php", "w+");
fwrite($rootSettings, $settings);
$rootuninstall = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/Register&Login/lib/uninstall.php", "w+");
fwrite($rootuninstall, $uninstall);
?>