<?php


$file = fopen("BarChart.html", "w") or die("Unable to open");

$text = $_POST['configbox'];

fwrite($file, $text);
echo "File successfully been updated!";
echo "<a href='/SurveyBuilder/Builder/SurveyBuilder.php'><button>Back</button></a>";
fclose($file);
?>