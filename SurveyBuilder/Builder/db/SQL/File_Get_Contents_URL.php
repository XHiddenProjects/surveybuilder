<?php
$title = $_POST['title-clone'];
$file= $title . '.php';
$content = file_get_contents($file);
echo "Copy the text below and paste it into the textbox";
echo "<br/>";
echo "<br/>";
echo $content;
header("EditDatabase.php");
?>