<?php
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }	
	$dateTime = date("Y-m-d h:i:sa");
	
	$openFile = fopen($_SERVER['DOCUMENT_ROOT']."/SurveyBuilder/Builder/Installedpackage/IP_Storage/lib/ips/ip-".$dateTime,"w+");
	fwrite($openFile, $ip);
	fclose($openFile);
?>