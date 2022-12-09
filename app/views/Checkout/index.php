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
		foreach ($data['displayCart'] as $cart) {
			echo "</br>
		<tr>
		<td type=name>$cart->food_id</td>
		</br>
		<td type=name>$cart->order_quantity</td>
		</br>
		<td type=name>$cart->total_price</td>
		</br>
		<a href='/Food/viewFood/$cart->food_id'>view details</a>
		</br>
		<a href='/Checkout/removeFromCart/$cart->checkout_details_id'>Remove Food<i class='bi-trash'></i></a>
		</tr>
    </br>
    </br>";
		}
		?>

		<a href='/Checkout/payCheckout/'>Pay Checkout</a>
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