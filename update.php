<?php
  $con = mysqli_connect("localhost", "root", "wasim121", "demo");

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
    $sql = "UPDATE users SET name = '".$name."', password = '".$pass."', address = '".$addr."', phone = '".$fon."' WHERE username = '".$uname."'";
    echo $sql;
    mysqli_query($con,$sql);
    $sql1 = "select user_id from users where username = '".$uname."'";
    $result = mysqli_query($con,$sql1);
    $row = mysqli_fetch_assoc($result);
    $emp_uid = $row['user_id'];
    $sqlemp = "UPDATE employee SET dept = '".$dept."', location = '".$location."' WHERE emp_uid = ".$emp_uid;
    mysqli_query($con,$sqlemp);
    echo "successful";
    header("location:home_user1.php");
   }
    mysqli_close($con);
?>