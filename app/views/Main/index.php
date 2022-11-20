<?php $this->view('header', 'Foodie'); ?>

<!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="/Main/login" role="tab"
      aria-controls="pills-login" style="background-color: #f38f95;">Login</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="/Main/register" role="tab"
      aria-controls="pills-register" style="background-color: #f38f95;">Register</a>
  </li>
</ul>
<!-- Pills navs -->

<?php echo "<a href='/Category/addMenu'>Add Category</a>" ?> <br>
<a href="/Food/index">Food List</a>

<?php $this->view('footer', 'Foodie'); ?>