<html>

<head>
	<title>Food List</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>

<body>
	<?php $this->view('header', 'Foodie'); ?>
	<h1>Food List</h1>


	<form action="/Food/search" method="get" style='display:inline-block'>
		<div class="input-group">
			<input type="search" style="width: 250px" name='search_term' class="form-control" placeholder="Search for specific food" />	
			<button type="submit" class="btn btn-primary" value="Search"><i class="bi-search"></i></button>
		</div>
	</form>

	<form action="/Food/sortByPrice" method="get" style='display:inline-block'>
		<div class="input-group">
			<input type="search" style="width: 250px" name='search_term' class="form-control" placeholder="Sort food by price" />	
			<button type="submit" class="btn btn-primary" value="Search"><i class="bi-search"></i></button>
		</div>
	</form>

<br>

	<?php echo "<a href='/Food/addFood'>Add Food</a>" ?>
	<br>

	<?php
	foreach ($data as $food) {
		echo "<tr>
		<td type=name>$food->food_name</td>       		 
		<td type=action>
		<a href='/Food/editFood/$food->food_id'>edit<i class='bi bi-pencil-square'></i></a> | 
        <a href='/Food/viewFood/$food->food_id'>view details</a> |
		<a href='/Food/delete/$food->food_id'>delete<i class='bi-trash'></i></a>
		</td>
		</tr>
        </br>";
	}
	?>
	<?php $this->view('footer', 'Foodie'); ?>
</body>