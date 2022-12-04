<html>
<head>
  <title>Add Review</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>

<body>

<h1>Add Review</h1>

<?php 
  if(isset($_GET['error'])){ ?>
        <div class="alert alert-danger" role="alert">
  <?= $_GET['error'] ?>
        </div>
<?php }
?>

<form action='' method='post' enctype='multipart/form-data'>
	<div class="form-outline mb-4">
             <label for="rating">Rating:</label>
              <select name="rating" id="rating">
                <optgroup>
                  <?php 
                    foreach (ratings as $key=>$rating) {
                      echo "<option value='$key'>$rating</option>";
                    }
                  ?>
                </optgroup>
	<div class="form-group">
		<label class="col-sm-2 col-form-label">Comment:
		<input class='form-control' type="text "name="comment" rows="4" cols="20" placeholder="Write your comment here." required />
		</label>
	</div>
	<input type="submit" name="action" value="Post Review" class='btn btn-primary' />
</form>

<a href='/'>Cancel</a>

</body>