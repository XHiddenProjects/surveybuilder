<?php
$getJSON = file_get_contents($_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/BotConfig.json");
$data = json_decode($getJSON);

//path to directory to scan
$directory = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Console/";
$Botname = $data->name;
//get all text files with a .txt extension.
$texts = glob($directory . "*.sbconsole");

//print each file name
foreach($texts as $text){
	$consoleFile = file_get_contents($text);
	

//read TimeZone
date_default_timezone_set($data->config->TimeZone);
//Continue
require("./datestamp.php");
require("./strpos.php");


	if($strHeading){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added Heading on Line:" . __LINE__."\n"); 	
	}
	if($strPara){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added paragraph on Line:" . __LINE__."\n"); 	
	}
	if($strName){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added Name on Line:" . __LINE__."\n"); 	
	}
	if($strEmail){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added Email on Line:" . __LINE__."\n"); 	
	}
	if($strAddress){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added Address on Line:" . __LINE__."\n"); 	
	}
	if($strPhone){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added Phone on Line:" . __LINE__."\n"); 	
	}
	if($strDate){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added Date on Line:" . __LINE__."\n"); 	
	}
	if($strTime){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added Time on Line:" . __LINE__."\n"); 	
	}
	if($strQR){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added QRCode on Line:" . __LINE__."\n"); 	
	}
	if($strMedia){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added Social Media on Line:" . __LINE__."\n"); 	
	}
	if($strTaC){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added Terms and Conditions on Line:" . __LINE__."\n"); 	
	}
	if($strAudio){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added Audio on Line:" . __LINE__."\n"); 	
	}
	if($strYT){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added YouTube on Line:" . __LINE__."\n"); 	
	}
	if($strFrame){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added iframe on Line:" . __LINE__."\n"); 	
	}
	if($strInput){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added input(s) on Line:" . __LINE__."\n"); 	
	}
	if($strVideo){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added video on Line:" . __LINE__."\n"); 	
	}
	if($strNumber){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added number on Line:" . __LINE__."\n"); 	
	}
	if($strDirectons){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added Free Text Editor on Line:" . __LINE__."\n"); 	
	}
	if($strTable){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added Table on Line:" . __LINE__."\n"); 	
	}
	if($strPayments){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added Payment on Line:" . __LINE__."\n"); 	
	}
	if($strApp){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/logs/logger.log";
$file = fopen($row, 'a+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Successfully: added Apps on Line:" . __LINE__."\n"); 	
	}
}


?>