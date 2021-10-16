<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url()?>/asset/css/bootstrap.min.css">

	<script src="<?php echo base_url()?>/asset/bootstrap/js/jquery-3.3.1.min.js"></script>

	<title>Register</title>
	<script>
		function verifypassword(){
			var pwd = document.getElementById("txtpwd").value;
			var msg = document.getElementById("msg");
			var grade = document.getElementById("grade");
			var but = document.getElementById("button");

			function showGrade(min, max, value, low, high){
				grade.min=min;
				grade.max=max;
				grade.value=value;
				grade.low=low;
				grade.high=high;
			}

			var regExp = /(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=(?:.*\W){2,})/;

			if(pwd.match(regExp)&&pwd.length>=12){
				msg.innerHTML="Strong Password";
				showGrade(1,100,100,0,0);
				but.disabled = false;
			}
			else{
				if(pwd.length<12){
					msg.innerHTML="Poor Password";
					showGrade(1,100,100,60,80);
					but.disabled = true;
				}
				else{
					msg.innerHTML="Weak Password";
					showGrade(1,100,100,40,80);
					but.disabled = true
				}
			}
		}
	</script>
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
		<form action="<?php echo base_url('index.php/Register/validation')?>" method="post">
			<div class="card-header bg-primary text-white">Registration</div>
			<div class="card-body " >
				<div class="form-group">
					<label>Name</label>
					<input class="form-control form-control-sm" name="name" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email Address</label>
					<input class="form-control form-control-sm" type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="form-group">
					<label >Birth Date</label>
					<input class="form-control form-control-sm" name="bd" type="date" class="form-control">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input class="form-control form-control-sm" type="password" class="form-control" id="txtpwd" name="txtpwd" onkeyup="verifypassword()">
					<meter min="1" max="100" value="0" low="0" high="0" id="grade">
					</meter>
					<span id="msg"></span></dd>
				</div>

				<button type="submit" id="button" name="save" class="btn btn-primary" disabled>Register</button>
				<div style="float:right; margin-right: 10px">
					<label style=" margin-right: 10px">Have you had an account?</label><a class="btn btn-success btn-sm"  href="<?php echo base_url('index.php/User/login')?>">Sign in</a>
				</div>
			</div>
		</form>

	</div>
</body>
</html>