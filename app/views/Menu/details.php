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

<form action="/Category/details/<?= $data['menu']->category_id ?>" method="get" style='display:inline-block'>
	<h4>Sort Food by price</h4>
	<div class="input-group">
		<button type="submit" name="Order" value="Ascend"><i class="bi bi-sort-up-alt"></i></button>
		<button type="submit" name="Order" value="Descend"><i class="bi bi-sort-down"></i></button>
	</div>
</form>

<?php
	foreach ($data['foods'] as $viewFood) {
			$this->view('/Food/assignFoodView', $viewFood);
}
?>

<a href='/Category/index'>Back to category index</a>


<?php $this->view('footer', 'Foodie'); ?>