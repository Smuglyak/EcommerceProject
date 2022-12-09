<body>

  <?php $this->view('header', 'Foodie'); ?>
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
      <div class="card bg-white text-dark" style="border-radius: 1rem;">
        <div class="card-body p-5 text-center">
          <div class="mb-md-5 mt-md-4 pb-5">
            <form action='' method='post' enctype='multipart/form-data'>
              <div class="mb-4">
                <input type="text" name="username" class="form-control form-control-lg" />
                <div class="form-helper">Username</div>
              </div>
              <input type="submit" name="action" value="Find Question" class='btn btn themeButton' />
            </form>
            <a href='/Main/index'>Cancel</a>
          </div>
        </div>
      </div>
    </div>
</div>



    <?php $this->view('footer', 'Foodie'); ?>
</body>