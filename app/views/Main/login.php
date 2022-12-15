<?php $this->view('header', 'Foodie'); ?>

<section class="vh-100" style="margin-bottom: 150px;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-white text-dark" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
              <form action='' method='post'>
                <h2 class="fw-bold mb-2 text-uppercase"><?= _("Login") ?></h2>
                <p class="text-dark-50 mb-5"><?= _("Please enter your login and password!") ?></p>

                <div class="mb-4">
                  <input type="text" name="username" class="form-control form-control-lg" />
                  <div class="form-helper"><?= _("Username") ?></div>
                </div>

                <div class="mb-4">
                  <input type="password" name="password" class="form-control form-control-lg" />
                  <div class="form-helper"><?= _("Password") ?></div>
                </div>
                <p class="small mb-5 pb-lg-2"><a class="text-dark-50" href="/Main/findSecurityQuestion"><?= _("Forgot password?") ?></a></p>

                <div class="mb-4">
                  <p class="text-dark-50 mb-5"><?= _("Don't have an account?") ?> <a href="/Main/register" class="text-dark-50"><?= _("Sign Up") ?></a>
                  </p>
                </div>

                <button class="btn themeButton" type="submit" name="action"><?= _("Login") ?></button>


              </form>


            </div>



          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $this->view('footer', 'Foodie'); ?>