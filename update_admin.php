<?php
  $con = mysqli_connect("localhost", "root", "wasim121", "demo");

  $uname = $_POST['usrnm'];
  $email = $_POST['email'];
  $dept = $_POST['dept'];
  $location = $_POST['location'];

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
  }
   else{
    $sql1 = "select user_id from users where username = '".$uname."'";
    $result = mysqli_query($con,$sql1);
    $row = mysqli_fetch_assoc($result);
    $emp_uid = $row['user_id'];
    $sqlemp = "UPDATE employee SET dept = '".$dept."', location = '".$location."' WHERE emp_uid = ".$emp_uid;
    mysqli_query($con,$sqlemp);
    header("location:home_admin1.php");
   }
    mysqli_close($con);
?>