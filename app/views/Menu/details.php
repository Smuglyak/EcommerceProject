<?php $this->view('header', 'Foodie'); ?>

<h1>Menu details</h1>
<dl>
	<dt>
		Name:
	</dt>
	<dd>
		<?= $data->category_name ?>

	</dd>
	<dt>
		Description:
	</dt>
	<dd>
		<?= $data->category_description ?>
	</dd>
	<dt>
		Type:
	</dt>
	<dd>
		<?= $data->category_type ?>
	</dd>
</dl>

<h2>Menu food list</h2>
Food menus as assignFoods
put assignFoods in for loop, with the id of the menu, that we are in, 
so get the menu id as parameter in here, and the assignFoods list.


<?php $this->view('footer', 'Foodie'); ?>