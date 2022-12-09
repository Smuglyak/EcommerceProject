<body>
	<?php $this->view('header', 'Foodie'); ?>
	<div class="container py-3">
		<div class="hNav">
			<h3><a href="/Category/index">Menu</a></h3>
			<span aria-hidden="true">
				<h3>/</h3>
			</span>
			<h3><a href="/Food/index">All Products</a></h3>
			<span aria-hidden="true">
				<h3>/</h3>
			</span>
			<h2><?= $data['food']->food_name ?></h2>
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

		<a href='/Favorite/addFavorite/<?= $data['food']->food_id ?>'>Add to Favorite</a>
		</br>
		<a href='/Checkout/addFoodToCart/<?= $data['food']->food_id ?>'>Add to Cart</a>

		<dl>
			<dt>
				Picture:
			</dt>
			<dd>
				<img src="/images/blank.jpg" style="max-width:200px;max-height:200px" id="profile_pic_preview" />
			</dd>
			<dt>
				Name:
			</dt>
			<dd>
				<?= $data['food']->food_name ?>

			</dd>
			<dt>
				Description:
			</dt>
			<dd>
				<?= $data['food']->food_description ?>
			</dd>
			<dt>
				Price:
			</dt>
			<dd>
				<?= $data['food']->price ?>
			</dd>
		</dl>

		<h3>Reviews</h3>

		<a href='/Review/addReview/<?= $data['food']->food_id ?>'>Add a review</a>

		</br>
		<?php
		foreach ($data['reviews'] as $reviews) {
			echo "</br>
		<tr>
		<td type=name>$reviews->rating stars</td>
		</br>
		<td type=name>$reviews->comment</td>
		</br>
		<td type=name>Review by $reviews->username</td>
		</br>
		<a href='/Review/deleteReview/$reviews->review_id'>Remove review<i class='bi-trash'></i></a>
		</tr>
    </br>
    </br>";
		}
		?>

	</div>

	<script>
		file = "" + "<?= $data['food']->picture ?>"
		if (file != "") {
			document.getElementById("profile_pic_preview").src = "/images/" + file;
		}
	</script>
	<?php $this->view('footer', 'foodie'); ?>
</body>