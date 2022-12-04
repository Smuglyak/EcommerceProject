<html>

<head>
	<title>Favorite Food List</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>

<body>
	<?php $this->view('header', 'Foodie'); ?>
	<h1>My Favorite Food List</h1>
	<br>

	<?php
	foreach ($data as $favorites) {
		echo "
		<li>
		<tr>
		<td type=name>$favorites->food_name</td><br>
		<td type=action>
		<a href='/Food/viewFood/$favorites->food_id'>View Details</a><br>
		<a href='/Favorite/deleteFavorite/$favorites->favorite_id'>Remove from Favorite<i class='bi-trash'></i></a>
		</td>
		</tr>
		</li>
        ";
	}
	?>
	</br>
	<a href='/Account/index'>Go back to My Account</a>
	<?php $this->view('footer', 'Foodie'); ?>
</body>