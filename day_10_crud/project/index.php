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

<body>
	<?php

	/**
	 * Isset add form
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

		if (empty($name) || empty($username) || empty($email) || empty($cell) || empty($address) || empty($dept) || empty($roll) || empty($gander) || empty($age) || empty($photo)) {
			$msg = "<p class=\"alert alert-danger py-1\">All fields are required! </p>";
		} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
			$msg = "<p class=\"alert alert-danger py-1\">Invalid email address! </p>";
		}
	}
	?>

	<div class="container">
		<a href="form.php" class="btn btn-success mb-3 mt-5">add new information</a>
		<div class="wrap-table shadow">
			<div class="card">
				<div class="card-body">
					<h2>All Students Information</h2>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Email</th>
								<th>Contact NO</th>
								<th>Department</th>
								<th>Address</th>
								<th>Photo</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>

							<?php
							$data = all('details');
							$i = 1;
							while ($data_user = $data->fetch_object()) :

							?>
							<tr>
								<td><?php echo $i;
											$i++; ?></td>
								<td><?php echo $data_user->name ?></td>
								<td><?php echo $data_user->email ?></td>
								<td><?php echo $data_user->contact ?></td>
								<td><?php echo $data_user->department ?></td>
								<td><?php echo $data_user->address ?></td>
								<td><img src="photos/<?php echo $data_user->photo ?>" class="img-fluid" style="width: 80px;"></td>
								<td>
									<a class="btn btn-sm btn-info" href="#">View</a>
									<a class="btn btn-sm btn-warning" href="#">Edit</a>
									<a class="btn btn-sm btn-danger" href="#">Delete</a>
								</td>
							</tr>
							<?php endwhile; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</body>

</html>