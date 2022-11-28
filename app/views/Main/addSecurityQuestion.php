<html>
<head>
  <title>Add Security Question</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>

<body>
  <?php 
  if(isset($_GET['error'])){ ?>
        <div class="alert alert-danger" role="alert">
  <?= $_GET['error'] ?>
        </div>
<?php }
?>
  <header>

    </header>

      <form action='' enctype="multipart/form-data" method='post'>
            <div class="form-outline mb-4">
             <label for="question">Question:</label>
              <select name="question" id="question">
                <optgroup label="Questions">
                  <?php 
                    foreach (questions as $key=>$question) {
                      echo "<option value=$key>$question</option>";
                    }
                  ?>
                </optgroup>
              <input type="text" name="answer" required>
            </div>
                
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4" name="action">Save</button>
          </div>
      </form>
  </body>
</html>
