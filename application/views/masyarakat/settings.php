<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <?=$_SESSION['nik']?>
    
    <?=$_SESSION['username']?>
    <?=$_SESSION['password']?>
    <?=$_SESSION['telp']?>
    <div class="d-flex justify-content-center">
        <div class="card">
        <center>
            <i class='bx bx-user'></i>
        </center>
        Hallo<?=$_SESSION['nama']?>
        </div>
    </div>
    <a class="aa nav-link" href="<?php echo site_url('masyarakat/laporan') ?>">back</a>
</body>
</html>