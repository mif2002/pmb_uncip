<?php
    include 'koneksi.php';
     $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran 
        WHERE id_pendaftaran = '".$_GET['id']."' ");
        $p = mysqli_fetch_object($peserta);

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMB Online</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,400&family=Quicksand:wght@500&display=swap" rel="stylesheet">

</head>
<body>
    <h2>Bukti Pendaftaran</h2>
    <table>
        <tr>
            <td>kode Pendaftaran</td>
            <td></td>
            <td><?php echo $p-> id_pendaftaran ?> </td>
        </tr>
         <tr>
            <td>Tahun Ajaran</td>
            <td></td>
            <td> <?php echo $p-> th_ajaran ?> </td>
        </tr>
        <td>Program Studi</td>
            <td></td>
            <td> <?php echo $p-> prodi ?> </td>
        </tr>
         <tr>
            <td>Tempat Lahir</td>
            <td></td>
            <td> <?php echo $p-> tmp_lahir ?> </td>
        </tr>
         <tr>
            <td>Tanggal Lahir</td>
            <td></td>
            <td> <?php echo $p-> tgl_lahir ?> </td>
        </tr>
         <tr>
            <td>Jenis Kelamin</td>
            <td></td>
            <td> <?php echo $p-> jk ?> </td>
        </tr>
        <tr>
            <td>Asal Sekolah</td>
            <td></td>
            <td> <?php echo $p-> asl_sekolah ?> </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td></td>
            <td> <?php echo $p-> jurusan ?> </td>
        </tr>
         <tr>
            <td>Agama</td>
            <td></td>
            <td> <?php echo $p-> agama ?> </td>
        </tr>
         <tr>
            <td>Alamat Lengkap</td>
            <td></td>
            <td> <?php echo $p-> almt_peserta ?> </td>
        </tr>
    </table>

</body>
</html>