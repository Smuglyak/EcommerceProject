<html>
<head>
  <title>Add Review</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>

<body>
<h1>Add Review</h1>
<form action='' method='post' enctype='multipart/form-data'>
	<div class="form-group">
		<label class="col-sm-2 col-form-label">Rating:<input class='form-control' type="text" name="rating" placeholder='Enter rating. Rating is out of 5 stars.' /></label>
	</div>
	<div class="form-group">
		<label class="col-sm-2 col-form-label">Comment:
		<textarea name="food_description" rows="4" cols="50" placeholder="Write your comment here.">
		</textarea></label>
	</div>
	<input type="submit" name="action" value="Create food" class='btn btn-primary' />
</form>

<a href='/'>Cancel</a>

</body>