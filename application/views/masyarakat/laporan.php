<?php
// include('');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('css/navbar/1.css') ?>">

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <title>Document</title>
</head>

<body>
  <style>
    html,
    body {
      height: 100vh;
    }

    a {
      text-decoration: none !important;
    }

    body {
      background: -webkit-linear-gradient(bottom, rgb(255, 255, 255), rgb(255, 255, 255));
      background-repeat: no-repeat;
    }
  </style>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(0,0,0,0.10);">
    <h6 class="navbar-brand text-dark"><?= $_SESSION['username'] ?></h6>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false">
      <span class="">=</span>
    </button>
    <div class="collapse navbar-collapse" style="background-color: black;" id="navbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <a class="nav-link me-2 disabled link-light" href="#">Disabled</a>
        <a class="nav-link me-2 link-light" href="<?php echo site_url('auth/logout') ?>">BACK</a>
      </ul>
      <!-- <div class="navbar-nav">
      </div> -->
    </div>
  </nav>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>