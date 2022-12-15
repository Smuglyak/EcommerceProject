<?php $this->view('header', 'Foodie'); ?>
<!-- Why menu index called main index in here? -->
<div class="banner" id="banner">
  <div class="box" style="text-align: center;">
    <a class="btn themeButton shadow" href="#divOne"><?= _("Proceed to the website") ?></a>
  </div>
  <div class="overlay" id="divOne">
    <div class="wrapper">
      <h1><?= _("Welcome to the site") ?></h1>
      <h5><?= _("Log in or register to proceed to the menu") ?></h5><a class="close" href="#">&times;</a>
      <div class="content">
        <div class="container">
          <div class="menuContainer">
            <a href="/Main/login">
              <div class="btn themeButton">
                <p><?= _("Login") ?></p>
              </div>
            </a>
            <a href="/Main/register">
              <div class="btn themeButton">
                <p><?= _("Register") ?></p>
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