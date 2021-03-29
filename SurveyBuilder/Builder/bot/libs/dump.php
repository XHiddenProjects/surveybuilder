<?php
/*LOG ERROR*/
//getJSONConfig
$getJSON = file_get_contents($_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/BotConfig.json");
$data = json_decode($getJSON);
//read TimeZone
date_default_timezone_set($data->config->TimeZone);
//Continue
require("./datestamp.php");
$Botname = $data->name;

if($data->version == 1){
	if($data->config->log !== "TXT" && $data->config->log !== "LOG"){
	$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/dump/" . $month . "-" . $day . "-" . $year . " " . $hrs . "-" . $min . "-" . $sec . ".log";
$file = fopen($row, 'w+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Error: must have a valid log type on Line:". __LINE__); 
	echo '<span style="background-color:red;color:black;"><i class="fas fa-exclamation-circle"></i> error was sent to <a href="' . $row . '" target="_blank" style="color:cyan;">'.$row.'</a></span>';	
	}
	if(gettype($data->config->threshold) !== "integer"){
			$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/dump/" . $month . "-" . $day . "-" . $year . " " . $hrs . "-" . $min . "-" . $sec . ".log";
$file = fopen($row, 'w+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Error: threshold must be a integer on Line:" . __LINE__); 
     echo '<span style="background-color:red;color:black;"><i class="fas fa-exclamation-circle"></i> error was sent to <a href="' . $row . '" target="_blank" style="color:cyan;">'.$row.'</a></span>';
	}
	if($data->config->threshold < 0){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/dump/" . $month . "-" . $day . "-" . $year . " " . $hrs . "-" . $min . "-" . $sec . ".log";
$file = fopen($row, 'w+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Error: threshold must be greater than 0 on Line:". __LINE__); 
    echo '<span style="background-color:red;color:black;"><i class="fas fa-exclamation-circle"></i> error was sent to <a href="' . $row . '" target="_blank" style="color:cyan;">'.$row.'</a></span>';
	}
	if(gettype($data->config->TimeZone) !== "string"){
		$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/dump/" . $month . "-" . $day . "-" . $year . " " . $hrs . "-" . $min . "-" . $sec . ".log";
$file = fopen($row, 'w+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Error: TimeZone must be a string on Line:". __LINE__); 
    echo '<span style="background-color:red;color:black;"><i class="fas fa-exclamation-circle"></i> error was sent to <a href="' . $row . '" target="_blank" style="color:cyan;">'.$row.'</a></span>';
	}
	if(gettype($data->status) !== "boolean"){
$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/dump/" . $month . "-" . $day . "-" . $year . " " . $hrs . "-" . $min . "-" . $sec . ".log";
$file = fopen($row, 'w+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Error: Status must be a boolean on Line:". __LINE__); 
    echo '<span style="background-color:red;color:black;"><i class="fas fa-exclamation-circle"></i> error was sent to <a href="' . $row . '" target="_blank" style="color:cyan;">'.$row.'</a></span>';
	}
	
	
}
/*version error*/
else{
$row = $_SERVER["DOCUMENT_ROOT"]."/SurveyBuilder/Builder/bot/dump/" . $month . "-" . $day . "-" . $year . " " . $hrs . "-" . $min . "-" . $sec . ".log";
$file = fopen($row, 'w+') or die("Unable to create file"); 
fwrite($file, $Botname.': [' .  $month . "/" . $day . "/" . $year . " " . $hrs . ":" . $min . ":" . $sec . "." . $ms . "] - Error: version must be at a value of 1 on Line:". __LINE__); 
 echo '<span style="background-color:red;color:black;"><i class="fas fa-exclamation-circle"></i> error was sent to <a href="' . $row . '" target="_blank" style="color:cyan;">'.$row.'</a></span>';
}
?>
	     