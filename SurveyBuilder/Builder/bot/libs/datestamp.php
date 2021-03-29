<?php
$date = getdate(date("U"));
$month = "$date[month]";
$day = "$date[mday]";
$year = "$date[year]";
$hrs = "$date[hours]";
$min = "$date[minutes]";
$sec = "$date[seconds]";
$ms = round(microtime(true) * 1000);
?>