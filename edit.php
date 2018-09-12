<?php
session_start();
try{


$con = mysqli_connect("localhost", "root", "wasim121", "demo");

$uname = $_GET['uname'];

$sql1 = "select * from users where username = '" . $uname . "'";
$rs1 = mysqli_query($con, $sql1) or die(mysqli_error());
$row1 = mysqli_fetch_assoc($rs1);

$sql2 = "select * from employee where emp_uid = '" . $row1['user_id'] . "'";
$rs2 = mysqli_query($con, $sql2) or die(mysqli_error());
$row2 = mysqli_fetch_assoc($rs2);
}catch(Exception $e){
    echo $e->getMessage();
}
$_SESSION['uname'] = $row1['username'];
$_SESSION['name'] = $row1['name'];
$_SESSION['email'] = $row1['email'];
$_SESSION['password'] = $row1['password'];
$_SESSION['type'] = $row1['type'];
$_SESSION['address'] = $row1['address'];
$_SESSION['phone'] = $row1['phone'];

$_SESSION['dept'] = $row2['dept'];
$_SESSION['location'] = $row2['location'];
?>