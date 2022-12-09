	<?php $this->view('header', 'Foodie'); ?>
	<div class="container py-3">
		<div class="hNav">
			<h3 style="color: currentColor !important;"><a href="/Category/index">Menu</a></h3>
			<span aria-hidden="true">
				<h3>/</h3>
			</span>
			<h2><?= $data['menu']->category_name ?></h2>
		</div>


		<dl>
			<dt>
				Description:
			</dt>
			<dd>
				<?= $data['menu']->category_description ?>
			</dd>
		</dl>

		<!-- Search by price -->
		<div class="menuContainer">
			<form action="/Category/details/<?= $data['menu']->category_id ?>" method="get" style='display:inline-block'>
				<h4>Sort Food by price</h4>
				<div class="input-group">
					<button type="submit" name="Order" value="Ascend"><i class="bi bi-sort-up-alt"></i></button>
					<button type="submit" name="Order" value="Descend"><i class="bi bi-sort-down"></i></button>
				</div>
			</form>
		</div>


		<div class="row">
			<?php foreach ($data['foods'] as $food) { ?>
				<div class="col-sm-3">
					<div class="card" style="margin-bottom: 50px; width:300px">
						<img style="max-height: 306px" src="<?php echo "/images/" . $food->picture; ?>" class="card-img-top" alt="...">
						<div class="card-body text-center">
							<h5 class="card-title"><?php echo $food->food_name; ?></h5>
							<p class="card-text">$<?php echo $food->price; ?></p>
							<a class="btn themeButton" href='/Favorite/addFavorite/<?= $food->food_id ?>'>Add to Favorite</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
		<?php $this->view('footer', 'Foodie'); ?>