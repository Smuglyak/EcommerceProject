<?php $this->view('header', 'Foodie'); ?>
This is menu index
<br>

<?php
foreach ($data as $menu) {
	$this->view('Publication/partial', $publication);
}
?>

<a style="" href="/Main/logout">Log out</a>
<?php $this->view('footer', 'Foodie'); ?>