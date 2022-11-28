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
	foreach ($data as $foods) {
		echo "<tr>
		<td type=name>$foods->food_name</td>
		<td type=action>
		<a href='/favorite/delete/$favorites->food_id'>Remove from Favorite<i class='bi-trash'></i></a>
		</td>
		</tr>
        </br>";
	}
}
?>

<a href='/'>Log out</a>
<?php $this->view('footer', 'Foodie'); ?>
</body>