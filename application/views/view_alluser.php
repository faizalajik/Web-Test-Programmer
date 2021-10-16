<html>
<head>
	<!-- Bootstrap core CSS-->
	<link rel="stylesheet" href="<?php echo base_url()?>/asset/css/bootstrap.min.css">

	<script src="<?php echo base_url()?>/asset/bootstrap/js/jquery-3.3.1.min.js"></script>
	<script>
		function deleted(id){
			if(window.confirm('Delete this entry')){
				window.location.href = "<?php echo site_url('User/delete/'); ?>"+id;
			}
		}
		function edited(id){
			window.location.href = "<?php echo site_url('User/edit/'); ?>"+id;
		}
		function flashdata(){
			// var lab = document.getElementById("lab");
			// function clear(){
			// 	lab.hide
			// }
			setTimeout(document.getElementById("lab").style.visibility = "hidden",10000);
		}
	</script>
	<style type="text/css">
		.center {
			text-align: center;
			padding: 10px;
			margin: 10px;
			border: 1px solid silver;
			background-color: #E6E6FA;
		}
		.table {
			position: absolute;
			width: 70%;
			left: 50%;
			top: 50%;
			-webkit-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			
		}
	</style>
</head>
<body onclick="flashdata()">
	<div >
		<p><h3 class="center">Data User</h3></p>
		<label id="lab" style="float:left; margin-left:10px"><?php echo $this->session->flashdata('hasil'); ?></label>

		<a class="btn btn-danger btn-xs" style="float:right; margin-right: 10px" href ="<?php echo site_url('User/logout'); ?>"> Logout</a>
	</div>
	<div class="card-body" >
		<table class="table table-hover" width="70%" cellspacing="0">
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Photo</th>
			</tr>
			<?php
			foreach ($data as $dataUser){ ?>
			<tr>
				<td><?php echo $dataUser['first_name']; ?></td>
				<td><?php echo $dataUser['last_name']; ?></td>
				<td><?php echo $dataUser['email']; ?></td>
				<td><?php echo $dataUser['avatar']; ?></td>
				<td>
					<button class="btn btn-primary btn-xs" onclick="edited(<?php echo $dataUser['id'];?>)"> Edit</button></td>
					<td><button class="btn btn-danger btn-xs" id="delete" onclick="deleted(<?php echo $dataUser['id'];?>)">Delete
					</button></td>

					<?php } ?>
				</tr>
			</table>
		</div>
	</body>
	</html>