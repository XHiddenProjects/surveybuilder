<?php
$title = $_POST['title-clone'];
$file= $title . '.php';
$content = file_get_contents($file);
$letNewContent = htmlspecialchars($content);
echo "Copy the text below and paste it into the textbox";
echo "<br/>";
echo "<br/>";
echo "<textarea style='margin: 0px; width: 1438px; height: 545px;'>" . $letNewContent . "</textarea>";
header("EditDatabase.php");
?>