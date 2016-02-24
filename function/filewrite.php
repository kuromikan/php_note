<?php
header("Content-Type:text/html; charset=utf-8");
$str=$_GET["str"];
$filename = "file.txt";
$handle = fopen($filename, "w");
fwrite($handle,$str);
fclose($handle);
?>