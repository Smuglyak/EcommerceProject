<html>
<head>
	<title>Change Password</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
<?php $this->view('header', 'Foodie'); ?>
<h1>Change Password</h1>
<form action='' enctype="multipart/form-data" method='post'>    
<dl>
	<dt>
		Question:
	</dt>
	<dd>
		<?= $data['question']->question ?>
	</dd>
</dl>
<div class="form-outline mb-4">
    <input type="text" name="answer" placeholder="Enter the answer to the question" required>
</div>
</form>


<a href='/Main/login/'>Back to Login</a>
<?php $this->view('footer', 'foodie'); ?>
</body>
</html>