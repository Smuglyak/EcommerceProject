<?php $this->view('header', 'Foodie'); ?>

<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
<form action='' method='post'>
              <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
              <p class="text-dark-50 mb-5">Please enter your credentials</p>              

                <div class="form-outline form-white mb-4">
                    <input type="text" name="username" class="form-control form-control-lg" />
                    <div class="form-helper">Username</div>
                </div>

                <div class="form-outline form-white mb-4">
                    <input type="text" name="first_name" class="form-control form-control-lg" />
                    <div class="form-helper">Firstname</div>
                </div>

                <div class="form-outline form-white mb-4">
                    <input type="text" name="last_name" class="form-control form-control-lg" />
                    <div class="form-helper">Lastname</div>
                </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="password" class="form-control form-control-lg" required/>
                <div class="form-helper">Password</div>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="password_confirm" class="form-control form-control-lg" required />
                <div class="form-helper">Confirm Password</div>
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit"  name="action" style="background-color: red">Sign up</button>

</form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $this->view('footer', 'Foodie'); ?>