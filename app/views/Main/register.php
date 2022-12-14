<?php $this->view('header', 'Foodie'); ?>

<section class="vh-100" style="margin-bottom: 250px;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-white text-black" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
              <form action='' method='post'>
                <h2 class="fw-bold mb-2 text-uppercase"><?= _("Register") ?></h2>
                <p class="text-dark-50 mb-5"><?= _("Please enter your credentials") ?></p>

                <div class="mb-4">
                  <input type="text" name="username" class="form-control form-control-lg" />
                  <div class="form-helper"><?= _("Username") ?></div>
                </div>

                <div class="mb-4">
                  <input type="text" name="first_name" class="form-control form-control-lg" />
                  <div class="form-helper"><?= _("Firstname") ?></div>
                </div>

                <div class="mb-4">
                  <input type="text" name="last_name" class="form-control form-control-lg" />
                  <div class="form-helper"><?= _("Lastname") ?></div>
                </div>

                <div class="mb-4">
                  <input type="password" name="password" class="form-control form-control-lg" required />
                  <div class="form-helper"><?= _("Password") ?></div>
                </div>

                <div class="mb-4">
                  <input type="password" name="password_confirm" class="form-control form-control-lg" required />
                  <div class="form-helper"><?= _("Confirm Password") ?></div>
                </div>

                <button class="btn themeButton" type="submit" name="action" style="background-color: red"><?= _("Sign up") ?></button>

              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $this->view('footer', 'Foodie'); ?>