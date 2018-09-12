<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
</style>
<title>User Home</title>
</head>

<body>
<?php
try{

$con = mysqli_connect("localhost","root","wasim121","demo");
// $sql1 = "select * from users where type = 'user'";
// $rs1 = mysqli_query($con,$sql1) or die(mysql_error());
// $row1 = mysqli_fetch_assoc($rs1);

// $sql2 = "select * from employee";
// $rs2 = mysqli_query($con,$sql2) or die(mysql_error());
// $row2 = mysqli_fetch_assoc($rs2);
$sql = "SELECT a.username, a.name, a.email,a.address,a.phone, b.dept, b.location FROM users a 
        INNER JOIN employee b WHERE a.user_id = b.emp_uid ";
$result = mysqli_query($con,$sql) or die(mysqli_error());
}catch(Exception $e){
    echo $e->getMessage();
}
?>

<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Email</th> 
    <th>Address</th>
    <th>Phone</th>
    <th>Department</th>
    <th>Location</th>  
    <th>Edit Profile</th>  
  </tr>
  <?php
  while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['dept'] . "</td>";
  echo "<td>" . $row['location'] . "</td>";
  echo '<td><a href="form_admin.php?uname='.$row['username'].'"> EDIT </a></td>';
  echo "</tr>";
  }
    ?>
    </table>
</body>
</html>
