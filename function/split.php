<?php
header("Content-Type:text/html; charset=utf-8");
$str="apple,bee,car,desk";

echo "explode<br>";
echo "$str<br>";
print_r(explode(",", $str));
echo "<br><br>";

echo "implode<br>";
$arr=array("elephant","fish","golf");
print_r($arr);
echo "<br>";
echo implode(",",$arr)."<br><br>";

echo "merge<br>";
$arr1=array("home","ice");
$arr2=array("jacket","king","lion");
print_r($arr1);
echo "<br>";
print_r($arr2);
echo "<br>";
$arr3=array_merge($arr1,$arr2);
print_r($arr3);
echo "<br>";

?>