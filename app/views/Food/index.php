<body>
	<?php $this->view('header', 'Foodie'); ?>
	<div class="container py-3">
		<div class="hNav">
			<h3><a href="/Category/index">Menu</a></h3>
			<span aria-hidden="true">
				<h3>/</h3>
			</span>
			<h2>All Products</h2>
		</div>


		<!-- search for food -->
		<div class="menuContainer">
			<form action="/Food/search" method="get" style='display:inline-block; margin:0px'>
				<div class="input-group">
					<input type="search" style="width: 250px" name='search_term' class="form-control" placeholder="Search for specific food" />
					<button type="submit" style="background-color: #E5172A" class="btn btn-primary" value="Search"><i class="bi-search"></i></button>
				</div>
			</form>

			<a class='btn themeButton' href='/Food/addFood'>
				<h6>Add Food</h6>
			</a>

			<a class='btn themeButton' href="/Food/assignFood">
				<h6>Assign a food to menu</h6>
			</a>
		</div>

		<?php
		foreach ($data as $food) {
			if ($food->is_available != "False") {
				echo "<tr>
		<td type=name>$food->food_name</td>       		 
		<td type=action>
		
		</td>
		</tr>
        </br>";
			}
		}
		?>


		<div class="row">
			<?php foreach ($data as $food) {
				if ($food->is_available != "False") {
			?>
					<div class="col-sm-3">
						<div class="card" style="margin-bottom: 50px; width:300px">
							<img style="max-height: 306px" src="<?php echo "/images/" . $food->picture; ?>" class="card-img-top" alt="...">
							<div class="card-body text-center">
								<h5 class="card-title"><?php echo $food->food_name; ?></h5>
								<p class="card-text">$<?php echo $food->price; ?></p>
								<a class="btn themeButton" href='/Favorite/addFavorite/<?= $food->food_id ?>'>Add to Favorite</a>
							</div>
							<div class="menuContainer" style="justify-content:center !important;">
								<a type=action href='/Food/editFood/$food->food_id'>edit<i class='bi bi-pencil-square'></i></a> |
								<a type=action href='/Food/viewFood/$food->food_id'>view details<i class="bi bi-three-dots"></i></a> |
								<a type=action href='/Food/delete/$food->food_id'>delete<i class='bi-trash'></i></a>
							</div>
						</div>
					</div>
			<?php }
			} ?>
		</div>
	</div>
	<?php $this->view('footer', 'Foodie'); ?>
</body>