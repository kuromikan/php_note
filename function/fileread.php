<?php
header("Content-Type:text/html; charset=utf-8");
$filename = "file.txt";
$handle = fopen($filename, "rb");
$contents = fread($handle, filesize($filename));
echo $contents;
fclose($handle);
?>