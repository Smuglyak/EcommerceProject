<html>

<head>

  <title><?= $data ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <link rel="stylesheet" href="/lol.css">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>

</head>

<body>
  <!-- <div class='container'> -->
  <div class="text-center p-3" style="background-color: #f38f95;">

    <?php
    if (!isset($_SESSION['username'])) { ?>
      <a href='/Main/index'><img src="/images/foodie.png" style="max-width: 200px;" /></a>
    <?php  } else { ?>
      <a href='/Category/index'><img src="/images/foodie.png" style="max-width: 200px;" /></a>
    <?php  }
    ?>

    <img src="/images/power.png" style="max-width: 200px;" />
    <img src="/images/Makima.png" style="max-width: 200px;" />

    <?php
    if (isset($_SESSION['username'])) { ?>
      <a style="color:inherit;"href="/Account/index">Account<i class="bi bi-person-circle"></i></a>
    <?php } ?>
    <hr class="solid">
  </div>
  <div class="container py-3">
    <!-- </div> -->