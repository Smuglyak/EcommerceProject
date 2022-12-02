<?php $this->view('header', 'Foodie'); ?>

<h1>Menu details</h1>
<dl>
	<dt>
		Name:
	</dt>
	<dd>
		<?= $data['menu']->category_name ?>

	</dd>
	<dt>
		Description:
	</dt>
	<dd>
		<?= $data['menu']->category_description ?>
	</dd>
	<dt>
		Type:
	</dt>
	<dd>
		<?= $data['menu']->category_type ?>
	</dd>
</dl>

<h2>Menu food list</h2>
<?php
foreach ($data['assignFoods'] as $food) {
	$food_id = $food->food_id;
	foreach ($data['foods'] as $viewFood) {
		if ($viewFood->food_id == $food_id) {
			$this->view('/Food/assignFoodView', $viewFood);
		}
	}
}
?>


<?php $this->view('footer', 'Foodie'); ?>