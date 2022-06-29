<?php
$a[0] = 10;
$a[1] = 20.20;
$a[2] = "c";
$a[3] = "PHP";

$a[] = 10;
$a[] = 20.20;
$a[] = "c";
$a[] = "php";

$a = array(10,20,30,"c","c++","php");

echo "p for".$a[5];

for($i=0;$i<count($a);$i++)
{
    echo "<br>" .$a[$i];
}
// Inbulit Functions to Debug an array 
echo "<pre>";
print_r($a);
echo "<pre>";

echo "<pre>";
var_dump($a);
echo "<pre>";

echo "<pre>";
var_export($a);
echo "<pre>";
?>



