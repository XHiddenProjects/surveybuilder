<?php
echo "<head>Saving Completed...</head>";

$file = fopen("ScatterPlot.html", "w") or die("Unable to open");

$text = $_POST['configbox'];

fwrite($file, $text);
echo "File successfully been updated!";
echo "<a href='/SurveyBuilder/Builder/SurveyBuilder.php'><button>Back</button></a>";
fclose($file);
?>