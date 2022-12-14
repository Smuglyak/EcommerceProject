<html>

<head>
	<title><?= _("2fa set up") ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>

<body>

	<center><img src="/Main/makeQRCode?data=<?= $data ?>" width="200" height="200" /></center>
	<center><?= _("Please scan the QR-code on the screen with your favorite
		Authenticator software, such as Google Authenticator. The
		authenticator software will generate codes that are valid for 30
		seconds only. Enter such a code while and submit it while it is
		still valid to confirm that the 2-factor authentication can be
		applied to your account.") ?></center>

	<div class="container mt-5">

		<div class="row">
			<div class="col-sm-4 m-auto">
				<div class="card">
					<div class="card-header">
						<h4><?= _("Setup 2fa") ?></h4>
					</div>
					<div class="card-body">

						<form method="post" action="">

							<div class="col-sm-12 mb-3">
								<label for=""><?= _("Current code shown by the app") ?></label>
								<input type="text" name="currentCode" class="form-control" required>
							</div>


							<div class="col-sm-12">
								<button type="submit" name="action" value="Verify Code" class="btn btn-success"><?= _("Submit") ?></button>
							</div>

						</form>
</body>

</html>