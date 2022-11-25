<?php $this->view('header', 'Foodie'); ?>
<!-- Why menu index called main index in here? -->

<!-- Pills navs -->
<ul class="nav nav-pills  nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="/Main/login" role="tab" aria-controls="pills-login" style="background-color: #f38f95;">Login</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="/Main/register" role="tab" aria-controls="pills-register" style="background-color: #f38f95;">Register</a>
  </li>
</ul>
<!-- Pills navs -->

<?php $this->view('footer', 'Foodie'); ?>