<?php
  session_start();
  $con = mysqli_connect("localhost", "root", "wasim121", "demo");

  $uname = $_POST['username'];
  $pass = $_POST['password'];

  $sql = "select * from users where username ='".$uname."' and password = '".$pass."'";
  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0)
          while($row = mysqli_fetch_assoc($result))
            {
              $_SESSION['uname']=$row['username'];
              $_SESSION['name']=$row['name'];
              if($row['type']=='user')
              {
                header("location:home_user1.php");
              }
              else header("location:home_admin1.php");
            }
  else {
    echo "Wrong Username or Password";
      }
    mysqli_close($conn);
?>
