<body>
<?php $this->view('header', 'Foodie'); ?>
<h1>Food information</h1>

<?php
	if(isset($_GET['error'])){ ?>
<div class="alert alert-danger" role="alert">
  <?= $_GET['error'] ?>
</div>

<?php	}
	if(isset($_GET['message'])){ ?> 
<div class="alert alert-success" role="alert">
  <?= $_GET['message'] ?>
</div> <?php } ?>

<a href='/Favorite/addFavorite/<?= $data['food']->food_id ?>'>Add to Favorite</a>
<dl>
	<dt>
		Picture:
	</dt>
	<dd>
		<img src="/images/blank.jpg" style="max-width:200px;max-height:200px" id="profile_pic_preview" />
	</dd>
	<dt>
		Name:
	</dt>
	<dd>
		<?= $data['food']->food_name ?>
		
	</dd>
	<dt>
		Description:
	</dt>
	<dd>
		<?= $data['food']->food_description ?>
	</dd>
    <dt>
		Price:
	</dt>
	<dd>
		<?= $data['food']->price ?>
	</dd>
</dl>



<script>
file = "" + "<?= $data['food']->picture ?>"
if (file != "") {
	document.getElementById("profile_pic_preview").src = "/images/" + file;
}
</script>

<a href='/Food/index/'>Back to Food List</a>
<?php $this->view('footer', 'foodie'); ?>
</body>