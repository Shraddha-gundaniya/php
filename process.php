<?php
//$_GET['controlname'] $_POST['controlname']
$txt1 = $_GET['txt1'];
$txt2 = $_GET['txt2'];

echo "My Name is $txt1 and Moblie Nubmer is $txt2 ";

echo "<table border='1'>";
for($i=0;$i<$txt2;$i++){
    echo "<tr>";
    if($i % 2 == 0){
        echo "<td style ='color:blue;'> $i </td>";
    }else{
        echo "<td style='color:red;'> $i </td>";
    }
    echo "</tr>";
}
echo "</table>";
?>