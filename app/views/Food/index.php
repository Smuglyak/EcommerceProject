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
			<input type="search" style="width: 250px" name='search_term2' class="form-control" placeholder="Sort food by price" />	
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