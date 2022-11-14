<html>
<head>
	<title>Food details</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>

<h1>Food information</h1>
<dl>
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
	<dt>
		Picture:
	</dt>
	<dd>
		<img src="/images/blank.jpg" style="max-width:200px;max-height:200px" id="profile_pic_preview" />
	</dd>
</dl>



<script>
file = "" + "<?= $data['food']->picture ?>"
if (file != "") {
	document.getElementById("profile_pic_preview").src = "/images/" + file;
}
</script>

<a href='/Food/index/'>Back to Food List</a>

</body>
</html>