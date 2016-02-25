<?php
header("Content-Type:text/html; charset=utf-8");

$str1="hello php";
$str2="php";
$str3="world";
echo "str1=$str1,str2=$str2,str3=$str3<br><br>";
echo "字串比對<br>";
$parse1=strpos($str1,$str2);
echo "parse1=$parse1<br>";
$parse2=strpos($str2,$str1);
echo "parse2=$parse2<br><br>";

echo "字串替換<br>";
echo "替換前 : $str1<br>";
$replace=str_replace($str2,$str3,$str1);
echo "替換後 : $replace<br><br>";

$str1=" hello php ";
echo "str1=$str1<br>";
echo "字串刪除<br>";
$trimmed1=trim($str1);
echo "去除字串頭尾空白:$trimmed1<br>";
$trimmed2=ltrim($str1);
echo "去除字串頭空白:$trimmed2<br>";
$trimmed3=rtrim($str1);
echo "去除字串尾空白:$trimmed3<br>";
$sub=substr($str1,0,-4);
echo "從字尾開始移除n個字元:$sub<br>";
?>