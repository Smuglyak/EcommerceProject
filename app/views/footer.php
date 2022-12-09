</div>
<footer>
  <!-- Copyright -->

  <div class="container" id="footerContainer">
    <footer class="py-3 my-4" style="padding-top: 0px !important;">
      <hr aria-hidden="true" class="sb-rule py5">
      <ul class="nav justify-content-center pb-3 mb-3">
        <p style="padding-top:20px">© 2022 Budget Doordash Company. All rights reserved.</p>
      </ul>
      <?php if (isset($_SESSION['username'])) { ?>
        <div class="center">
          <a href="/Main/logout" class="btn themeButton">
            <p class="text-center"><i class="bi bi-door-closed"></i>Log out</p>
          </a>
        </div>
      <?php } else {?>
<div class="center">
            <p class="text-center">Alihan Djamankulov, Craig Justin Balibalos, Alexandra Vovc</p>
        </div>
<?php } ?>
    </footer>

    <!-- Copyright -->