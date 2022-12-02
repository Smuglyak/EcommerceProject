<body>

  <?php $this->view('header', 'Foodie'); ?>

  <form action='' method='post' enctype='multipart/form-data'>
    <div class="form-outline form-white mb-4">
                  <input type="text" name="username" class="form-control form-control-lg" />
                  <div class="form-helper">Username</div>
                </div>
    <input type="submit" name="action" value="Find Question" class='btn btn-primary' />
  </form>

  <a href='/Main/index'>Cancel</a>

  <?php $this->view('footer', 'Foodie'); ?>
</body>