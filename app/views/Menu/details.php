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
		Type:
	</dt>
	<dd>
		<?= $data['menu']->type ?>
	</dd>
</dl>

<?php $this->view('footer', 'Foodie'); ?>