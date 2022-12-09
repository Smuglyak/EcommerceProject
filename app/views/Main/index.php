<?php $this->view('header', 'Foodie'); ?>
<!-- Why menu index called main index in here? -->

<div class="banner" id="banner">
  <div class="box" style="text-align: center;">
    <a class="btn themeButton shadow" href="#divOne">Proceed to the website</a>
  </div>
  <div class="overlay" id="divOne">
    <div class="wrapper">
      <h1>Welcome to the site</h1>
      <h5>Log in or register to proceed to the menu</h5><a class="close" href="#">&times;</a>
      <div class="content">
        <div class="container">
          <div class="menuContainer">
            <a href="/Main/login">
              <div class="btn themeButton">
                <p>Login</p>
              </div>
            </a>
            <a href="/Main/register">
              <div class="btn themeButton">
                <p>Register</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Pills navs -->

<?php $this->view('footer', 'Foodie'); ?>