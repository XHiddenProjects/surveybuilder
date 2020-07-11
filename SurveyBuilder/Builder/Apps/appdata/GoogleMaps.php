<?php


$file = fopen("GoogleMaps.html", "w") or die("Unable to open");

$text = $_POST['configbox'];

fwrite($file, $text);
echo "File successfully been updated!";
echo "<a href='/SurveyBuilder/builder/SurveyBuilder%5bPage%202%5d.php'><button>Back</button></a>";
fclose($file);
?>