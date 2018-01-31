<!DOCTYPE html>
<html>
<head>
	<title>[WingHosting] - Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>
	<div class="col-md-4 col-md-offset-4 form-login">
		<?php
			//* handle error */
			if (isset($_GET['error'])) :
		?>
		<div class="alert alert-warning alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-labe="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<strong>Waarschuwing! </strong><?=base64_decode($_GET['error']);?>
		</div>
		<?php
			endif;
		?>
		<div class="outter-form-login">
			<div class="logo-login">
				<em class="glyphicon glyphicon-user"></em>
			</div>
			<form action="check-login.php" class="inner-login" method="post">
				<h3 class="text-center title-login">[WingHosting - Login]</h3>
				<div class="form-group">
					<input type="text" class="form-control" name="username" placeholder="Gebruikersnaam">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="password" placeholder="Wachtwoord">
				</div>
				<input type="submit" class="btn btn-block btn-custom-green" value="LOGIN">
				<div class="text-center forget">
					<p>Wachtwoord Vergeten?</p>
				</div>
			</form>
		</div>
	</div>

	<script src="assets/js/jquery-min.js"></script>
	<script type="assets/js/bootstrap.min.js"></script>
</body>
</html>
