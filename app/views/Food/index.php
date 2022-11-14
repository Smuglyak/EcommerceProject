<html>
<head>
  <title>Food List</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>

<body>
<h1>Food List</h1>
<?php
foreach ($data as $food) {
	echo "<tr>
		<td type=name>$food->food_name</td>
        <td type=name>$food->price</td>
		<td type=action>
		
		<a href='/Food/editFood/$food->food_id'>edit</a> | 
        <a href='/Food/viewFood/$food->food_id'>view details</a> |
		<a href='/Food/delete/$food->food_id'>delete</a>
		</td>
		</tr>
        </br>";
}

?>

<a href='/'>Cancel</a>

</body>