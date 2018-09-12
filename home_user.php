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
session_start();
try {

    $con = mysqli_connect("localhost", "root", "wasim121", "demo");

    $uname = $_SESSION['uname'];
    
    $sql1 = "select * from users where username = '" . $uname . "'";
    $rs1 = mysqli_query($con, $sql1) or die(mysql_error());
    $row1 = mysqli_fetch_assoc($rs1);

    $sql2 = "select * from employee where emp_uid = '" . $row1['user_id'] . "'";
    $rs2 = mysqli_query($con, $sql2) or die(mysql_error());
    $row2 = mysqli_fetch_assoc($rs2);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<table style="width:100%">
      <tr>
    <th>Name of employee</th>
    <td><?php echo $row1['name'] ?></td>
    <td rowspan = "6"><a href="form.php?uname=<?php echo $uname ?>" > EDIT </a></td>
    </tr>
    <tr>
    <th>Email</th>
    <td><?php echo $row1['email'] ?></td>
    </tr>
    <tr>
    <th>Address</th>
    <td><?php echo $row1['address'] ?></td>

    </tr>
    <tr>
    <th>Phone</th>
    <td><?php echo $row1['phone'] ?></td>

    </tr>
    <tr>
    <th>Department</th>
    <td><?php echo $row2['dept'] ?></td>

    </tr>
    <tr>
    <th>Location</th>
    <td><?php echo $row2['location'] ?></td>
    </tr>
    <tr>
        
    <th colspan = "3" ><a href="login.html">Logout</a></th>
    </tr>
    </table>
</body>
</html>
