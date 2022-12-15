<html>

<head>
	<title><?= _("Change Password") ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
	<?php $this->view('header', 'Foodie'); ?>
	<div class="container py-3">
		<div class="hNav">
			<h3><a href="/Main/index"><?= _("Landing page") ?></a></h3>
			<span aria-hidden="true">
				<h3>/</h3>
			</span>
			<h3><a href="/Main/addSecurityQuestion"><?= _("Add Security Question") ?></a></h3>
			<span aria-hidden="true">
				<h3>/</h3>
			</span>
			<h3><a href="/Main/answerSecurityQuestion"><?= _("Answer Security Question") ?></a></h3>
			<span aria-hidden="true">
				<h3>/</h3>
			</span>
			<h2><?= _("Change Password") ?></h2>
		</div>
		<?php
		if (isset($_GET['error'])) { ?>
			<div class="alert alert-danger" role="alert">
				<?= $_GET['error'] ?>
			</div>
		<?php	}
		?>
		<a class="btn themeButton" href="/User/setup2fa"><?= _("Set up 2-factor authentication") ?></a>

		<div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-5">
				<div class="card bg-white text-dark" style="border-radius: 1rem;">
					<div class="card-body p-5 text-center">
						<div class="mb-md-5 mt-md-4 pb-5">
							<h1><?= _("Modify your password") ?></h1>
							<form action='' method='post'>
								<label><?= _("New Password:") ?><input type="password" name="password" /></label><br>
								<label><?= _("Confirmation New Password :") ?><input type="password" name="password_confirm" /></label><br>
								<input type="submit" name="action" value="Change password" />
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->view('footer', 'foodie'); ?>
</body>

</html>