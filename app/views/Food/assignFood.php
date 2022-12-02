<body>

  <?php $this->view('header', 'Foodie'); ?>

  <form action='' method='post' enctype='multipart/form-data'>
    <div class="form-outline mb-4">
      <label for="menu">Choose a Menu:</label>
      <select name="category_id" id="menu">
        <?php
        foreach ($data['menus'] as $menu) {
          echo "<option value='$menu->category_id'>$menu->category_name</option>";
        }
        ?>
      </select>
    </div>

    <div class="form-outline mb-4">
      <label for="menu">Choose a Food:</label>
      <select name="food_id" id="food">
        <?php
        foreach ($data['foods'] as $food) {
          echo "<option value='$food->food_id'>$food->food_name</option>";
        }
        ?>
      </select>
    </div>
    <input type="submit" name="action" value="Assign food" class='btn btn-primary' />
  </form>

  <a href='/Food/index'>Cancel</a>

  <?php $this->view('footer', 'Foodie'); ?>
</body>