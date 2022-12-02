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

<form action="/Food/sortByPrice" method="get" style='display:inline-block'>
	<div class="input-group">
		<input type="search" style="width: 250px" name='search_term2' class="form-control" placeholder="Sort food by price" />
		<button type="submit" class="btn btn-primary" value="Search"><i class="bi-search"></i></button>
	</div>
</form>

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

<a href='/Category/index'>Back to category index</a>


<?php $this->view('footer', 'Foodie'); ?>