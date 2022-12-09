<body>
	<?php $this->view('header', 'Foodie'); ?>
	<div class="container py-3">
		<div class="hNav">
			<h3><a href="/Category/index">Menu</a></h3>
			<span aria-hidden="true">
				<h3>/</h3>
			</span>
			<h2>Checkout</h2>
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

		<?php
		if ($data) {
			$total_price = 0;
			foreach ($data['displayCart'] as $cart) {
				$total_price = $total_price + $cart->total_price;
		?>
				<div class="row">
					<div class="col-sm-3">
						<div class="card" style="margin-bottom: 50px; width:300px">
							<img style="max-height: 306px" src="<?php echo "/images/" . $cart->picture; ?>" class="card-img-top" alt="...">
							<div class="card-body text-center">
								<h5 class="card-title"><?php echo $cart->order_quantity ?>x <?php echo $cart->food_name; ?></h5>
								<p class="card-text">$<?php echo $cart->price; ?></p>
								<a class="btn themeButton" href='/Favorite/addFavorite/<?= $cart->food_id ?>'>Add to Favorite&nbsp;&nbsp;<i class="bi bi-heart-fill"></i></a>
								<a style="margin-top:10px" class="btn themeButton" href='/Checkout/addFoodToCart/<?= $cart->food_id ?>'>Add to cart&nbsp;&nbsp;<i class="bi bi-cart-fill"></i></a>
							</div>
							<div class="menuContainer" style="justify-content:center !important;">
								<a type=action href='/Food/editFood/<?php echo $cart->food_id ?>'>edit<i class='bi bi-pencil-square'></i></a> |
								<a type=action href='/Food/viewFood/<?php echo $cart->food_id ?>'>view details<i class="bi bi-three-dots"></i></a> |
								<a type=action href='/Checkout/removeFromCart/$cart->checkout_details_id'>Delete from cart<i class='bi-trash'></i></a>
							</div>
						</div>
					</div>
				</div>
			<?php }
			echo "
			<h4>Total price: $total_price $</h4>
			<a class='btn themeButton' href='/Checkout/payCheckout/'>Pay Checkout</a>";
		} else { ?>
		<?php
			echo "<div class='container-fluid  mt-100'>
				 <div class='row'>
					<div class='col-md-12'>
							<div class='card'>
						<div class='card-header'>
						<h5>Cart</h5>
						</div>
						<div class='card-body cart'>
								<div class='col-sm-12 empty-cart-cls text-center'>
									<img style='height: 200px' src='/images/red-shopping-cart-10906.png' class='img-fluid mb-4 mr-3'>
									<h3><strong>Your Cart is Empty</strong></h3>
									<h4>Add something to make me happy :)</h4>
									<a href='/Category/index' class='btn themeButton' data-abc='true'>continue shopping</a>
								</div>
						</div>
				</div>
					</div>
				 </div>
				</div>
				";
		}
		?>


		</br>

		<script>
			file = "" + "<?= $data['displayCart']->picture ?>"
			if (file != "") {
				document.getElementById("profile_pic_preview").src = "/images/" + file;
			}
		</script>
	</div>
	<?php $this->view('footer', 'foodie'); ?>
</body>