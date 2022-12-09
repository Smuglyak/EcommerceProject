<html>

<head>
	<title>Change Password</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<link rel="icon" type="image/png" href="/images/foodie.png">
</head>

<body>
	<?php $this->view('header', 'Foodie'); ?>

	<div class="container py-3">
		<div class="hNav">
			<h3><a href="/Main/index">Landing page</a></h3>
			<span aria-hidden="true">
				<h3>/</h3>
			</span>
			<h3><a href="/Main/addSecurityQuestion">Add Security Question</a></h3>
			<span aria-hidden="true">
				<h3>/</h3>
			</span>
			<h2>Answer Security Question</h2>
		</div>
	</div>
	<div class="row d-flex justify-content-center align-items-center h-100">
		<div class="col-12 col-md-8 col-lg-6 col-xl-5">
			<div class="card bg-white text-dark" style="border-radius: 1rem;">
				<div class="card-body p-5 text-center">
					<div class="mb-md-5 mt-md-4 pb-5">
						<form action='' enctype="multipart/form-data" method='post'>
							<dl>
								<dt>
									Question:
								</dt>
								<dd>
									<?= $data['question']->question ?>
								</dd>
							</dl>
							<div class="mb-4">
								<input type="text" class="form-control form-control-lg" name="answer" placeholder="Enter the answer to the question" required>
							</div>
							<div class="d-flex justify-content-center">
								<button type="submit" class="btn themeButton" name="action">Verify Answer</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a href='/Main/login/'>Back to Login</a>
	<?php $this->view('footer', 'foodie'); ?>
</body>

</html>