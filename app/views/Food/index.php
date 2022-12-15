<body>
	<?php $this->view('header', 'Foodie'); ?>
	<div class="container py-3">
		<div class="hNav">
			<h3><a href="/Category/index"><?= _("Menu") ?></a></h3>
			<span aria-hidden="true">
				<h3>/</h3>
			</span>
			<h2><?= _("All Products") ?></h2>
		</div>

		<?php
		if (isset($_GET['error'])) { ?>
			<div class="alert alert-danger" role="alert">
				<?= $_GET['error'] ?>
			</div>

		<?php	}
		if (isset($_GET['message'])) { ?>
			<div class="alert alert-success" role="alert">
				<?= $_GET['message'] ?>
			</div> <?php } ?>

		<!-- search for food -->
		<div class="menuContainer">
			<form action="/Food/search" method="get" style='display:inline-block; margin:0px'>
				<div class="input-group">
					<input type="search" style="width: 250px" name='search_term' class="form-control" placeholder=<?= _("Search for specific food") ?> />
					<button type="submit" style="background-color: #E5172A" class="btn btn-primary" value=<?= _("Search") ?>><i class="bi-search"></i></button>
				</div>
			</form>

			<a class='btn themeButton' href='/Food/addFood'>
				<h6><?= _("Add Food") ?></h6>
			</a>

			<a class='btn themeButton' href="/Food/assignFood">
				<h6><?= _("Assign a food to menu") ?></h6>
			</a>
		</div>

		<div class="row">
			<?php foreach ($data as $food) {
				if ($food->is_available != "False") {
			?>
					<div class="col-sm-3">
						<div class="card" style="margin-bottom: 50px; width:300px">
							<img style="max-height: 306px" src="<?php echo "/images/" . $food->picture; ?>" class="card-img-top" alt="...">
							<div class="card-body text-center">
								<h5 class="card-title"><?php echo gettext($food->food_name); ?></h5>
								<p class="card-text">$<?php echo $food->price; ?></p>
								<a class="btn themeButton" href='/Favorite/addFavorite/<?= $food->food_id ?>'><?= _("Add to Favorite") ?>&nbsp;&nbsp;<i class="bi bi-heart-fill"></i></a>
								<a style="margin-top:10px" class="btn themeButton" href='/Checkout/addFoodToCart/<?= $food->food_id ?>'><?= _("Add to cart") ?>&nbsp;&nbsp;<i class="bi bi-cart-fill"></i></a>
							</div>
							<?php if ($_SESSION['role'] != 'admin') { ?>
								<div class="menuContainer" style="justify-content:center !important;">
									<a type=action href='/Food/viewFood/<?php echo $food->food_id ?>'><?= _("View details") ?><i class="bi bi-three-dots"></i></a>
								</div>
							<?php } else { ?>
								<div class="menuContainer" style="justify-content:center !important;">
									<a type=action href='/Food/editFood/<?php echo $food->food_id ?>'><?= _("Edit") ?><i class='bi bi-pencil-square'></i></a> |
									<a type=action href='/Food/viewFood/<?php echo $food->food_id ?>'><?= _("View details") ?><i class="bi bi-three-dots"></i></a> |
									<a type=action href='/Food/delete/$food->food_id'><?= _("Delete") ?><i class='bi-trash'></i></a>
								</div>
							<?php } ?>
						</div>
					</div>
			<?php }
			} ?>
		</div>
	</div>
	<?php $this->view('footer', 'Foodie'); ?>
</body>