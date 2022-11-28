<?php $this->view('header', 'Foodie'); ?>
	<h1>Dashboard</h1>
	<br>

	<!-- add menu -->
	<?php echo "<a href='/Category/addMenu'>Add Category</a>" ?>
	<br>
	<h2>
		List of all the Menus
	</h2>

	<?php

	foreach ($data['menus'] as $menu) {
		$this->view('/Menu/menuLink', $menu);
	}
	?>z`

	<h2>List of all the Combos</h2>

	<?php
	foreach ($data['combos'] as $menu) {
		$this->view('/Menu/menuLink', $menu);
	}
	?>

	<!-- the food list(all foods, uncategorized) -->
	<a href="/Food/index">Food List</a>

	<br>

	<br>
<!-- </div> -->
	<?php $this->view('footer', 'Foodie'); ?>