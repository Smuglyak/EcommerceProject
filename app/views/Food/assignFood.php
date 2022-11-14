<html>
<head>
  <title>Assign Food</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>

<body>
  <form action='' method='post' enctype='multipart/form-data'>
<div class="form-outline mb-4">
                  <label for="menu">Choose a Menu:</label>
                  <select name="menu_id" id="menu">
                    <?php
                      foreach($data as $menu){
                        echo "<option value='$menu->menu_id'>$menu->name</option>";
                      }
                    ?>
                  </select>
                </div>
                <input type="submit" name="action" value="Create food" class='btn btn-primary' />
                </form>
</body>