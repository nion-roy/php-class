<?php

include_once "autoload.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<script src="./assets/js/bootstrap.bundle.min.js"></script>


	<style>
	td {
		vertical-align: middle;
	}
	</style>

</head>

<body class="bg-light">
	<?php

	/**
	 * Isseting add form
	 */
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$cell = $_POST['cell'];
		$address = $_POST['address'];
		$dept = $_POST['dept'];
		$roll = $_POST['roll'];
		$gander = $_POST['gander'];
		$age = $_POST['age'];






		/**
		 * Form validations
		 */
		if (empty($name) || empty($username) || empty($email) || empty($cell) || empty($address) || empty($dept) || empty($roll) || empty($gander) || empty($age)) {
			$msg = validate('All fields are required !');
		} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
			$msg = validate('Invalid Email address !');
		} else {

			//File upload
			$unique_name = move($_FILES['photo'], 'photos/');

			// Data insert
			create("INSERT INTO details(name, user_name, email, contact, address, department, roll, gander, age, photo) VALUES ('$name', '$username', '$email', '$cell', '$address', '$dept', '$roll', '$gander', '$age', '$unique_name')");

			$msg = validate('Successful', 'success');
		}
	}
	?>
	<div class="container py-5">
		<div class="row">
			<div class="col-8 mx-auto bg-white p-4 border rounded">
				<h3><a href="index.php" class="btn btn-success mb-4">Back Dashboard</a></h3>
				<form action="" method="POST" enctype="multipart/form-data">
					<?php
					if (isset($msg)) {
						echo $msg;
					}
					?>
					<div class="form-group mb-3">
						<label for="" class="form-label">Name <span class="text-danger">*</span></label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-group mb-3">
						<label for="" class="form-label">User Name <span class="text-danger">*</span></label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group mb-3">
						<label for="" class="form-label">Email <span class="text-danger">*</span></label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group mb-3">
						<label for="" class="form-label">Contact No <span class="text-danger">*</span></label>
						<input type="number" name="cell" class="form-control">
					</div>
					<div class="form-group mb-3">
						<label for="" class="form-label">Address <span class="text-danger">*</span></label>
						<select name="address" class="form-select form-control">
							<option value="">-select-</option>
							<option value="dhaka">Dhaka</option>
							<option value="rangpur">Rangpur</option>
							<option value="rajsahi">Rajsahi</option>
							<option value="khulna">Khulna</option>
						</select>
					</div>
					<div class="form-group mb-3">
						<label for="" class="form-label">Department <span class="text-danger">*</span></label>
						<select name="dept" class="form-select form-control">
							<option value="">-select-</option>
							<option value="cse">CSE</option>
							<option value="eee">EEE</option>
							<option value="civil">CIVIL</option>
							<option value="bangla">BANGLA</option>
							<option value="english">ENGLISH</option>
						</select>
					</div>
					<div class="form-group mb-3">
						<label for="" class="form-label">Roll <span class="text-danger">*</span></label>
						<input type="number" name="roll" class="form-control">
					</div>
					<div class="form-group mb-3">
						<label for="" class="form-label">Gander <span class="text-danger">*</span></label>
						<br>
						<input type="radio" name="gander" value="male" checked id="male"><label
							for="male">&nbsp;Male</label>&nbsp;&nbsp;
						<input type="radio" name="gander" value="female" id="female"><label
							for="female">&nbsp;Female</label>&nbsp;&nbsp;
					</div>
					<div class="form-group mb-3">
						<label for="" class="form-label">Age <span class="text-danger">*</span></label>
						<input type="number" name="age" class="form-control">
					</div>
					<div class="form-group mb-3">
						<label for="" class="form-label">Photo <span class="text-danger">*</span></label>
						<input type="file" name="photo" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-success" value="add now">
					</div>
				</form>
			</div>
		</div>
	</div>

</body>

</html>