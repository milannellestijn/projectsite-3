<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">
  <!-- Eigen CSS -->
  <link rel="stylesheet" href="./css/style.css">
  <title>Hello, world!</title>
  <link rel="apple-touch-icon" sizes="180x180" href="/FAVICON/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/FAVICON/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/FAVICON/favicon-16x16.png">
<link rel="manifest" href="/FAVICON/site.webmanifest">
<link rel="mask-icon" href="/FAVICON/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
</head>

<body>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

<div class="container-fluid">

  <main class="container">
    <div class="row">
      <div class="col-12">
        <?php include("./navbar.php"); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <?php include("./link.php"); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <section class="content">
          <?php include("./navigation.php"); ?>
        </section>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <?php include("./footer.php"); ?>
      </div>
    </div>

  </main>

  </main>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>
  <script src="./js/script.js"></script>
</body>

</html>
