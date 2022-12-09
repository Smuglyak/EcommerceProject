<html>

<head>
	<title>Favorite Food List</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>

<body>
	<?php $this->view('header', 'Foodie'); ?>
	<div class="container py-3">
		<div class="hNav" style="padding-bottom: 20px">
			<h3><a href="/Account/index">Account</a></h3>
			<span aria-hidden="true">
				<h3>/</h3>
			</span>
			<h2>Favorites</h2>
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
		<br>
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
								<a class="btn themeButton" href='/Favorite/deleteFavorite/<?php echo $food->favorite_id ?>'>Remove from Favorite<i class='bi-trash'></i></a>
							</div>
							<div class="menuContainer" style="justify-content:center !important;">
								<a type=action href='/Food/editFood/<?php echo $food->food_id ?>'>edit<i class='bi bi-pencil-square'></i></a> |
								<a type=action href='/Food/viewFood/<?php echo $food->food_id ?>'>view details<i class="bi bi-three-dots"></i></a> |
								<a type=action href='/Food/delete/$food->food_id'>delete<i class='bi-trash'></i></a>
							</div>
						</div>
					</div>
			<?php }
			} ?>
		</div>

		</br>
	</div>
	<?php $this->view('footer', 'Foodie'); ?>
</body>