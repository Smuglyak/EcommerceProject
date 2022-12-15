<body>

  <?php $this->view('header', 'Foodie'); ?>

  <div class="container py-3">
    <div class="hNav" style="padding-bottom: 20px">
      <h3><a href="/Category/index"><?= _("Menu") ?></a></h3>
      <span aria-hidden="true">
        <h3>/</h3>
      </span>
      <h3><a href="/Food/index"><?= _("All Products") ?></a></h3>
      <span aria-hidden="true">
        <h3>/</h3>
      </span>
      <h2><?= _("Assign a Food") ?></h2>
    </div>

    <form action='' method='post' enctype='multipart/form-data'>
      <div class="form-outline mb-4">
        <label for="menu"><?= _("Choose a Menu:") ?></label>
        <select name="category_id" id="menu">
          <?php
          foreach ($data['menus'] as $menu) {
            echo "<option value='$menu->category_id'>" . gettext($menu->category_name) . "</option>";
          }
          ?>
        </select>
      </div>

      <div class="form-outline mb-4">
        <label for="menu"><?= _("Choose a Food:") ?></label>
        <select name="food_id" id="food">
          <?php
          foreach ($data['foods'] as $food) {
            echo "<option value='$food->food_id'>" . gettext($food->food_name) . "</option>";
          }
          ?>
        </select>
      </div>
      <input type="submit" name="action" value=<?= _("Assign food") ?> class='btn themeButton' />
    </form>

  </div>

  <?php $this->view('footer', 'Foodie'); ?>
</body>