<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Area</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
		<?php
try {

    $con = mysqli_connect("localhost", "root", "wasim121", "demo");
    // $sql1 = "select * from users where type = 'user'";
    // $rs1 = mysqli_query($con,$sql1) or die(mysql_error());
    // $row1 = mysqli_fetch_assoc($rs1);

    // $sql2 = "select * from employee";
    // $rs2 = mysqli_query($con,$sql2) or die(mysql_error());
    // $row2 = mysqli_fetch_assoc($rs2);
    $sql = "SELECT a.username, a.name, a.email,a.address,a.phone, b.dept, b.location FROM users a
				INNER JOIN employee b WHERE a.user_id = b.emp_uid ";
    $result = mysqli_query($con, $sql) or die(mysqli_error());
    $result1 = mysqli_query($con, $sql) or die(mysqli_error());
    echo $rowCount;
} catch (Exception $e) {
    echo $e->getMessage();
}

?>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1">
					<div class="table100-firstcol">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Name</th>
								</tr>
							</thead>
							<tbody>
                            <?php
while ($row = mysqli_fetch_array($result)) {
    echo '<tr class="row100 body">
									<td class="cell100 column1">' . $row['name'] . '</td>
                                </tr>';
}
?>
							</tbody>
						</table>
					</div>

					<div class="wrap-table100-nextcols js-pscroll">
						<div class="table100-nextcols">
							<table>
								<thead>
									<tr class="row100 head">
										<th class="cell100 column2">Email</th>
										<th class="cell100 column3">Address</th>
										<th class="cell100 column4">Phone</th>
										<th class="cell100 column5">Department</th>
                                        <th class="cell100 column6">Location</th>
										<th class="cell100 column7">Edit Profile</th>
										<th class="cell100 column8">Logout</th>
									</tr>
								</thead>
								<tbody>
                                 <?php
								while ($row1 = mysqli_fetch_array($result1)) {
    								echo '<tr class="row100 body">
										<td class="cell100 column2">' . $row1['email'] . '</td>
										<td class="cell100 column3">' . $row1['address'] . '</td>
										<td class="cell100 column4">' . $row1['phone'] . '</td>
										<td class="cell100 column5">' . $row1['dept'] . '</td>
                                        <td class="cell100 column6">' . $row1['location'] . '</td>
                                        <td class="cell100 column7"><a href="form_admin.php?uname=' . $row1['username'] . '"> EDIT </a></td>
										<td class="cell100 column8"><a href="home.html"> LOGOUT </a></td>
										
										</tr>';
}
?>


							</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})

			$(this).on('ps-x-reach-start', function(){
				$(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
			});

			$(this).on('ps-scroll-x', function(){
				$(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
			});

		});




	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>