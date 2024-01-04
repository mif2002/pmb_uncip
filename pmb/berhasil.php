<?php
    include 'koneksi.php';

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMB Online</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,400&family=Quicksand:wght@500&display=swap" rel="stylesheet">

    <style>
        .btn-cetak {
        display: inline-block;
        padding: 10px 17px;
        color: #fff;
        background-color: #4a99d7;
        margin-top: 5px;
        text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- bagian Formulir-->
    <section class="box-formulir">
        <h2> Pendaftaran Anda berhasil</h2>
        <div class="box">
            <h4>Kode Pendaftaran Anda <?php echo $_GET['id'] ?> </h4>
            <a href="cetak-bukti.php? id=<?php echo $_GET['id'] ?>" target="_blank" class="btn-cetak"> Cetak Bukti Pendaftaran</a>
        </div>
    </section>
</body>
</html>