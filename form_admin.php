<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}

.icon {
    padding: 10px;
    background: rgb(224, 75, 224);
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
    border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
    background-color: rgb(224, 75, 224);
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
</style>
</head>
<body>

<?php include('edit.php');
?>

<center>
 <form action="update_admin.php" method="post" style="max-width:500px;margin:auto">
  <h2>Register Form</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" readonly="readonly" type="text" value="<?php echo $row1['username']?>" name="usrnm">
  </div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" readonly="readonly" type="text" value="<?php echo $_SESSION['name']?>" name="name">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field"  type="text" readonly="readonly" value="<?php echo $_SESSION['email']?>" name="email">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" readonly="readonly" type="password" value="<?php echo $_SESSION['password']?>" name="psw">
  </div>

  <div class="input-container">
    <i class="fa fa-address-card icon"></i>
    <input class="input-field" readonly="readonly" type="text" value="<?php echo $_SESSION['address']?>" name="address">
  </div>

    <div class="input-container">
      <i class="fa fa-mobile-phone icon"></i>
      <input class="input-field" readonly="readonly" type="text" value="<?php echo $_SESSION['phone']?>" name="phone">
    </div>
    <div class="input-container">
      <i class="fa fa-envelope icon"></i>
      <input class="input-field" type="text" value="<?php echo $_SESSION['dept']?>" name="dept">
    </div>
    <div class="input-container">
      <i class="fa fa-envelope icon"></i>
      <input class="input-field" type="text" value="<?php echo $_SESSION['location']?>" name="location">
    </div>
  <button type="submit" class="btn" name = "submit">Register</button>
</form>
</center>
</body>
</html>
