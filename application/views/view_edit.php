<!DOCTYPE html>
<html>
<head>
	<?php echo $this->session->flashdata('hasil'); ?>
	<link rel="stylesheet" href="<?php echo base_url()?>/asset/css/bootstrap.min.css">

	<script src="<?php echo base_url()?>/asset/bootstrap/js/jquery-3.3.1.min.js"></script>
	<title>Edit</title>
	<style type="text/css">
		.center {
			margin: auto;
			width: 40%;
			border: 3px solid silver;
			padding: 10px;
			position: absolute;
			left: 50%;
			top: 50%;
			-webkit-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
		}
	</style>
</head>
<body>
	<div class="card center">
		<form action="<?php echo base_url('index.php/User/editData')?>" method="post">
			<div class="card-header bg-primary text-white">Edit Data</div>
			<div class="card-body " >
				<div class="form-group">
					<label for="exampleInputEmail1">Id Account</label>
					<input class="form-control form-control-sm" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo $data['id']; ?>" disabled>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input class="form-control form-control-sm" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo $data['email']; ?>">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">First Name</label>
					<input class="form-control form-control-sm" type="test" class="form-control" id="fname" placeholder="<?php echo $data['first_name']; ?>">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Last Name</label>
					<input class="form-control form-control-sm" type="test" class="form-control" id="lname" placeholder="<?php echo $data['last_name']; ?>">
				</div>

				<button type="submit" name="save" class="btn btn-primary">Save</button>
				<button type="submit" name="cancel" class="btn btn-danger">Cancel</button>

			</div>
		</form>
	</div>
</body>
</html>