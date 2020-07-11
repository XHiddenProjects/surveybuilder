<?php
	//replace Test.php with a different file name
$name = "./History/Test.php";
$file = fopen("$name", "w") or die("Unable to open file!");
$text = file_get_contents("SurveyBuilder[Page 2].php");
fwrite($file, $text);
echo "your work was published into the the history";
?>