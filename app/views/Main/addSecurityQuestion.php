<html>

<head>
  <title><?= _("Add Sequrity Question") ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>

<body>
  <?php $this->view('header', 'Foodie'); ?>
  <div class="container py-3">
    <div class="hNav">
      <h3><a href="/Main/index"><?= _("Landing page") ?></a></h3>
      <span aria-hidden="true">
        <h3>/</h3>
      </span>
      <h2><?= _("Add Sequrity Question") ?></h2>
    </div>

    <?php
    if (isset($_GET['error'])) { ?>
      <div class="alert alert-danger" role="alert">
        <?= $_GET['error'] ?>
      </div>
    <?php }
    ?>

    <form action='' enctype="multipart/form-data" method='post'>
      <div class="form-outline mb-4">
        <label for="question"><?= _("Question") ?></label>
        <select name="question" id="question">
          <optgroup label="Questions">
            <?php
            foreach (questions as $key => $question) {
              echo "<option value='$key'>" . gettext($question) . "</option>";
            }
            ?>
          </optgroup>
          <input type="text" name="answer" required>
      </div>

      <div class="d-flex justify-content-center">
        <button type="submit" class="btn themeButton" name="action"><?= _("Save") ?></button>
      </div>
    </form>
  </div>
  <?php $this->view('footer', 'foodie'); ?>
</body>


</html>