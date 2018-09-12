<?php
session_start();
try{

$con = mysqli_connect("localhost","root","wasim121","demo");

$uname = $_SESSION['uname'];
$sql1 = "select * from users where username = '".$uname."'";
$rs1 = mysqli_query($con,$sql1) or die(mysql_error());
$row1 = mysqli_fetch_assoc($rs1);

$sql2 = "select * from employee where emp_uid = '".$row1['user_id']."'";
$rs2 = mysqli_query($con,$sql2) or die(mysql_error());
$row2 = mysqli_fetch_assoc($rs2);
}catch(Exception $e){
    echo $e->getMessage();
}
?>