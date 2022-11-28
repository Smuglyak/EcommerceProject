<html>
<head>
  <title>Add Menu</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>

<body>
	<?php $this->view('header', 'Foodie'); ?>
<h1>Add Menu</h1>
<form action='' method='post' enctype='multipart/form-data'>
	<div class="form-group">
		<label class="col-sm-2 col-form-label">Name:<input class='form-control' type="text" name="menu_name" placeholder='Enter the menu/combo name.' style="width: 400px;"/></label>
	</div>
	<div class="form-group">
		<label class="col-sm-2 col-form-label">Type:<input class='form-control' type="text" name="menu_type" placeholder='Enter the type of menu(Combo or Menu).' style="width: 400px;"/></label>
	</div>
	<input type="submit" name="action" value="Create menu" class='btn btn-primary' />
</form>

<?php $this->view('footer', 'Foodie'); ?>
</body>