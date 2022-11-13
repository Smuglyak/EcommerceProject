<?php $this->view('header', 'Foodie'); ?>

<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
              <p class="text-dark-50 mb-5">Please enter your credentials</p>
              
                <div class="form-outline mb-4">
                    <input type="email" id="Username" class="form-control form-control-lg" />
                    <div class="form-helper">Username</div>
                </div>

                <div class="form-outline form-dark mb-4">
                    <input type="text" id="Firstname" class="form-control form-control-lg" />
                    <div class="form-helper">Firstname</div>
                </div>

                <div class="form-outline form-dark mb-4">
                    <input type="text" id="Lastname" class="form-control form-control-lg" />
                    <div class="form-helper">Lastname</div>
                </div>

              <div class="form-outline form-dark mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                <div class="form-helper">Password</div>
              </div>

              <div class="form-outline form-dark mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                <div class="form-helper">Confirm Password</div>
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit" style="background-color: red">Sign up</button>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $this->view('footer', 'Foodie'); ?>