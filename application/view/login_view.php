<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi LMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo URL;?>css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo URL; ?>css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo URL;?>css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <!-- <link href="../vendor/morrisjs/morris.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <link href="<?php echo URL;?>css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<style>
		body{
			background-color: #f4f4f4;
		}
	</style>
</head>

<body>
	<div class="container" style="margin-top: 80px;">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 class="text-center">Form Login</h4>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<form action="<?php echo URL; ?>login/masuk" method="POST">
								<div>
									<label class="control-label" for="username">Username</label>
								</div>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input class="form-control" type="text" name="username" placeholder="Username" required>
								</div>
								<br>
								<div>
									<label class="control-label" for="password">Password</label>
								</div>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input class="form-control" type="password" name="password" placeholder="Password" required>
								</div>
								<br>
								<div class="form-group">
									<label for="login_sebagai">Login Sebagai</label>
									<select class="form-control" name="id_level">
										<option selected value="1">Admin</option>
										<option value="2">Mahasiswa</option>
										<option value="3">Dosen</option>
									</select>
								</div>
								<input type="submit" name="btn_login" value="Login" class="btn btn-primary">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <script src="<?php echo URL; ?>js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo URL;?>js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo URL;?>js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo URL;?>js/sb-admin-2.js"></script>



</body>

</html>

