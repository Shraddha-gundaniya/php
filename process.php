<?php

$Name =$_POST['txt1'];
$Gender=$_POST['txt2'];

echo " My name is $Name and Gender is $Gender";

$connection = mysqli_connect("localhost","root","","covid19");
$query = mysqli_query($connection , "insert into tbl_student(sd_name,sd_gender) values('$Name','$Gender')") or die("Error".mysqli_error($connection));

if($query)
{
    echo "<script>alert('Record Added');</script>";
}
?>