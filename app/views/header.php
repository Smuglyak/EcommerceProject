<!DOCTYPE html>
<html lang="en">

<head>

  <title><?= $data ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="/app/views/style.css">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />

  <link href="https://fonts.cdnfonts.com/css/tt-norms-pro" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="Get tasty food for cheaper and faster than doordash. Open Monday-Friday 8-5pm, located in the NDG district.">

</head>
<nav class="headerContainer" style="padding-top: 16px !important; padding-bottom: 16px !important">

  <div class="logo">
    <?php
    if (!isset($_SESSION['username'])) { ?>
      <a href='/Main/index'>
        <div class="logoContainer">
          <div class="logoImage">
            <img src="/images/foodie.png" alt="Logo image" style="max-width: 200px;" />
          </div>
          <div class="logoText">
            <p>BUDGET_DOORDASH</p>
          </div>
        </div>
      </a>
    <?php  } else { ?>
      <a href='/Category/index'>
        <div class="logoContainer">
          <div class="logoImage">
            <img src="/images/foodie.png" alt="Logo image" style="max-width: 200px;" />
          </div>
          <div class="logoText">
            <p>BUDGET_DOORDASH</p>
          </div>
        </div>
      </a>
    <?php  }
    ?>
  </div>

  <div class="rightSide">
    <?php
    if (isset($_SESSION['username'])) { ?>
      <a href="/Account/index">
        <div class="logo-container">

          <i class="bi bi-person-circle"></i>

          <div class="logoText">
            <p>Account</p>
          </div>
        </div>
      </a>
      <a style="color:inherit;" href="/Checkout/index">Cart<i class="bi bi-person-circle"></i></a>
    <?php } ?>
  </div>


</nav>

<div class="container py-3">