<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url()?>/asset/css/bootstrap.min.css">

	<script src="<?php echo base_url()?>/asset/bootstrap/js/jquery-3.3.1.min.js"></script>

	<title>Sign in</title>

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
</head>
<body>
	<div class="card center">
		<form action="<?php echo base_url('index.php/User/loginUser')?>" method="post">
			<div class="card-header bg-primary text-white">Sign in</div>
			<div class="card-body " >
				<div class="form-group">
					<label for="exampleInputEmail1">Email Address</label>
					<input class="form-control form-control-sm" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input class="form-control form-control-sm" type="password" class="form-control" id="txtpwd" name="txtpwd">
				</div>

				<button type="submit" name="save" class="btn btn-primary">Sign in</button>
				<div style="float:right; margin-right: 10px">
					<label style=" margin-right: 10px">Don't have an account?</label><a class="btn btn-success btn-sm"  href="<?php echo base_url('index.php/Register/')?>">Register</a>
				</div>
			</div>
		</form>

	</div>
</body>
</html>