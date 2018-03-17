<?php
include("includes/class2.php");
if (isset($_POST['submit'])){
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$DOB = $_POST['DOB'];
	$Gender = $_POST['gender'];
	$Address = $_POST['address'];
	$sql = ( "INSERT INTO registration(NAME, Email, DOB, GENDER, ADDRESS) VALUES('$Name', '$Email', '$DOB', '$Gender', '$Address')");
	if (!mysqli_query($con,$sql)) {
		die('Error: ' . mysqli_error($con));
	}
	else{
		echo "<script>
		alert('INSERTED SUCCESSFULLY');
		</script>";
	}
}
?>
<!-- http meta injection -->

<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<meta name="viewpoint" content="width=device-width initial-scale=1.0, maximum-scale=1.0, user-scalabel=no">
	<link rel="stylesheet" href="css/bootstrap.min.css" media="all">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="text-center">
					<h1>Login Form</h1>
				</div>
			</div>
			<div id="form-content">
				<form class="form-horizontal" role="form" method="POST">
					<div class="form-group">
						<label for ="name" class="col-sm-2 control-label">Name:</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="Name">
						</div>
					</div>
					<div class="form-group">
						<label for="Email" class=" col-sm-2 control-label">Email:</label>
						<div class="col-sm-6">
							<input type="Email" class="form-control" name="Email">
						</div>
					</div>
					<div class="form-group">
						<label for="d.o.b" class="col-sm-2 control-label">D.O.B:</label>
						<div class="col-sm-6">
							<input type="date" name="DOB">
						</div>
					</div>
					<div class="form-group">
						<label for="gender" class="col-sm-2 control-label">Gender:</label>
						<div class="col-sm-6">
							<label class="checked-inline">
								<input type="radio" name="gender" value="male" checked>Male
								<input type="radio" name="gender" value="female">Female
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="Address" class="col-sm-2 control-label">Address:</label>
						<div class="col-sm-6">
							<input type="Address" name="address" class="form-control">
						</div>
					</div>

					<div class="col-md-6" style="text-align: center; padding-right: 120px;"> 
						<input class="btn btn-primary" type="submit" value="Submit" name="submit">
					</div>
				</form>
			</div>

		</div>

	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>