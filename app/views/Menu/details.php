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
		Menu type:
	</dt>
	<dd>
		<?= $data->category_type ?>
	</dd>
</dl>

<?php $this->view('footer', 'Foodie'); ?>