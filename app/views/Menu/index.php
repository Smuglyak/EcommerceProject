<html>

<body>
	<?php $this->view('header', 'Foodie'); ?>
	<div class="container py-3">
		<div class="menuContainer">
			<h2>Menu</h2>
			<!-- add menu -->
			<a class="btn themeButton" href='/Category/addMenu'>Add Menu</a>
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
		<!-- the food list(all foods, uncategorized) -->
		<ul>
			<div class="menuContainer">
				<li>
					<a href="/Food/index">
						<h4>All products</h4>
					</a>
				</li>
			</div>
		</ul>

		<hr>

		<?php

		foreach ($data['menus'] as $menu) {
			$this->view('/Menu/menuLink', $menu);
		}
		?>

		<h2>Combos</h2>

		<?php
		foreach ($data['combos'] as $menu) {
			$this->view('/Menu/menuLink', $menu);
		}
		?>

		<hr>

		<br>

		<br>
		<!-- </div> -->
		<?php $this->view('footer', 'Foodie'); ?>
	</div>
</body>

</html>

\\