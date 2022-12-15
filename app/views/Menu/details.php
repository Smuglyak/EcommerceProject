	<?php $this->view('header', 'Foodie'); ?>
	<div class="container py-3">
		<div class="hNav">
			<h3 style="color: currentColor !important;"><a href="/Category/index"><?= _("Menu") ?></a></h3>
			<span aria-hidden="true">
				<h3>/</h3>
			</span>
			<h2><?= gettext($data['menu']->category_name) ?></h2>
		</div>


		<dl>
			<dt>
				<?= _("Description:") ?>
			</dt>
			<dd>
				<?= gettext($data['menu']->category_description) ?>
			</dd>
		</dl>

		<!-- Search by price -->
		<div class="menuContainer">
			<form action="/Category/details/<?= $data['menu']->category_id ?>" method="get" style='display:inline-block'>
				<h4><?= _("Sort Food by price") ?></h4>
				<div class="input-group">
					<button type="submit" name="Order" value="Ascend" class="btn themeButton"><i class="bi bi-sort-up-alt"></i></button>
					<button type="submit" name="Order" value="Descend" class="btn themeButton">
						<i class="bi bi-sort-down"></i>
					</button>
				</div>
			</form>
		</div>


		<div class="row">
			<?php foreach ($data['foods'] as $food) {
				if ($food->is_available != "False") {
			?>
					<div class="col-sm-3">
						<div class="card" style="margin-bottom: 50px; width:300px">
							<img style="max-height: 306px" src="<?php echo "/images/" . $food->picture; ?>" class="card-img-top" alt="...">
							<div class="card-body text-center">
								<h5 class="card-title"><?php echo gettext($food->food_name); ?></h5>
								<p class="card-text">$<?php echo gettext($food->price); ?></p>
								<a class="btn themeButton" href='/Favorite/addFavorite/<?= $food->food_id ?>'><?= _("Add to Favorite") ?>&nbsp;&nbsp;<i class="bi bi-heart-fill"></i></a>
								<a style="margin-top:10px" class="btn themeButton" href='/Checkout/addFoodToCart/<?= $food->food_id ?>'><?= _("Add to cart") ?>&nbsp;&nbsp;<i class="bi bi-cart-fill"></i></a>
							</div>
							<?php if ($_SESSION['role'] != 'admin') { ?>
								<div class="menuContainer" style="justify-content:center !important;">
									<a type=action href='/Food/viewFood/<?php echo $food->food_id ?>'><?= _("view details") ?><i class="bi bi-three-dots"></i></a>
								</div>
							<?php } else { ?>
								<div class="menuContainer" style="justify-content:center !important;">
									<a type=action href='/Food/editFood/<?php echo $food->food_id ?>'><?= _("edit") ?><i class='bi bi-pencil-square'></i></a> |
									<a type=action href='/Food/viewFood/<?php echo $food->food_id ?>'><?= _("view details") ?><i class="bi bi-three-dots"></i></a> |
									<a type=action href='/Food/delete/$food->food_id'><?= _("delete") ?><i class='bi-trash'></i></a>
								</div>
							<?php } ?>
						</div>
					</div>
			<?php }
			} ?>
		</div>
	</div>
	<?php $this->view('footer', 'Foodie'); ?>