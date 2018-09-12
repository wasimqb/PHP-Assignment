<?php

$con = mysqli_connect("localhost","root","wasim121","demo") or die("Error " . mysqli_error($con));;

if(isset($_POST['usrnm']) && !empty($_POST['usrnm']) AND isset($_POST['email']) && !empty($_POST['email'])
&& !empty($_POST['psw']) && !empty($_POST['address']) && !empty($_POST['phone']))
{
  $uname = $_POST['usrnm'];
  $pass = $_POST['psw'];
  $email = $_POST['email'];
  $addr = $_POST['address'];
  $fon = $_POST['phone'];
  $name = $_POST['name'];
  $dept = $_POST['dept'];
  $location = $_POST['location'];

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
  }
   else{
    $sql = "INSERT INTO users (username, name, email, password, type, address, phone)
          VALUES ('".$uname."', '".$name."','".$email."','".$pass."','user','".$addr."','".$fon."')";
    mysqli_query($con,$sql);
    $sql1 = "select user_id from users where username = '".$uname."'";
    $result = mysqli_query($con,$sql1);
    $row = mysqli_fetch_assoc($result);
    $emp_uid = $row['user_id'];
    $sqlemp = "INSERT INTO employee (dept,location,emp_uid)
               VALUES ('".$dept."','".$location."','".$emp_uid."')";
    mysqli_query($con,$sqlemp);
    header("location:home.html");
  }
}
else{
  echo "Invalid entries";
}
mysqli_close($con);

 ?>
