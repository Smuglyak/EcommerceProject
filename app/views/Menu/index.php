<?php $this->view('header', 'Foodie'); ?>
This is menu index
<br>

<!-- add menu -->
<?php echo "<a href='/Menu/addMenu'>Add Menu</a>" ?>
<br>

<!-- List of all the menus -->
<?php
foreach ($data['menus'] as $menu) {
	$this->view('Menu/menuLink', $menu);
}
?>

<!-- the food list(all foods, uncategorized) -->
<a href="/Food/index">Food List</a>

<br>

<a style="" href="/Main/logout">Log out</a>


<?php $this->view('footer', 'Foodie'); ?>