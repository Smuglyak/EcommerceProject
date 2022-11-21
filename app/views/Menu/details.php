<?php $this->view('header', 'Foodie'); ?>

<h1>Menu details</h1>
<dl>
	<dt>
		Name:
	</dt>
	<dd>
		<?= $data['menu']->menu_name ?>
		
	</dd>
	<dt>
		Description:
	</dt>
	<dd>
		<?= $data['menu']->menu_description ?>
	</dd>
    <dt>
		Price:
	</dt>
	<dd>
		<?= $data['menu']->price ?>
	</dd>
	<dt>
		Picture:
	</dt>
	<dd>
		<img src="/images/blank.jpg" style="max-width:200px;max-height:200px" id="profile_pic_preview" />
	</dd>
</dl>

<?php $this->view('footer', 'Foodie'); ?>