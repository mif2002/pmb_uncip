<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])){
        //ambil 1 id terbesar di kolom id_pendaftaran, lalu ambil 5 karakter saja dari sebelah kanan//
        $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran,5)) AS id FROM tb_pendaftaran");
        $d = mysqli_fetch_object($getMaxId);
        $generateId ='P' .date('Y').sprintf("%05s", $d->id + 1);
        
        // proses insert
        $insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES(
                '".$generateId."',
                '".date('Y-m-d')."',
                '".$_POST['th_ajaran']."',
                '".$_POST['prodi']."',
                '".$_POST['nm']."',
                '".$_POST['tmp_lahir']."',
                '".$_POST['tgl_lahir']."',
                '".$_POST['jk']."',
                '".$_POST['asl_sekolah']."',
                '".$_POST['jurusan']."',
                '".$_POST['agama']."',
                '".$_POST['alamat']."'
            )");
        if($insert){
            echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
        }
        else{
            echo 'Mohon Cek Kembali'.mysqli_error($conn);
        }
    }   
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
    <!-- bagian Formulie-->
    <section class="box-formulir">
        <h2> Formulir Pendaftaran Maba Uncip</h2>

    <!-- bagian form -->
    <form action="" method="post">
    <div class="box">
        <table border ="0" table="table-form">
            <tr>
                <td>Tahun Ajaran</td>
                <td></td>
                <td>
                    <input type="text" name="th_ajaran" class="input-control" value="2024/2025" readonly>
                </td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td></td>
                <td>
                <select class="input-control" name="prodi">
                    <option value="">--pilih program studi--</option>
                    <option value="Sistem Informasi">Sistem informasi</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="RPL">Rekayasa Perangkat Lunak</option>
                    <option value="Aktuaria">Aktuaria</option>
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="KWU">Kewirausahaan</option>
                    <option value="Bisnis Digital">Bisnis Digital</option>
                    <option value="Biologi">Pendidikan Biologi</option>
                    <option value="Matematika">Pendidikan Matematika</option>
                </select>
                </td>
            </tr>
        </table>

            </div>
            <h3> Data Diri Mahasiswa Baru</h3>
            <div class="box">
        <table table="table-form">
            <tr>
                <td>Nama Lengkap</td>
                <td></td>
                <td>
                    <input type="text" name="nm" class="input-control">
                </td>
            </tr>
            <tr>
            <td>Tempat Lahir</td>
                <td></td>
                <td>
                    <input type="text" name="tmp_lahir" class="input-control">
                </td>
            </tr>
            <tr>
            <td>Tanggal Lahir</td>
                <td></td>
                <td>
                    <input type="date" name="tgl_lahir" class="input-control">
                </td>
            </tr>
            <td>Jenis Kelamin</td>
                <td></td>
                <td>
                    <input type="radio" name="jk" class="input-control" value="Laki-laki">Laki-laki &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="jk" class="input-control" value="Perempuan">Perempuan
                </td>
                <tr>
            <td>Asal Sekolah</td>
                <td></td>
                <td>
                    <input type="text" name="asl_sekolah" class="input-control">
                </td>
            </tr>
            <tr>
            <td>jurusan</td>
                <td></td>
                <td>
                    <input type="text" name="jurusan" class="input-control">
                </td>
            </tr>
            <tr>
            <td>agama</td>
                <td></td>
                <td>
                <select class="input-control" name="agama">
                    <option value="">--pilih--</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
                </td>
            </tr>
            <tr>
            <td>Alamat Lengkap</td>
                <td></td>
                <td>
                    <textarea class="input-control" name="alamat"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
                </td>
            </tr>
        </table>

        </form>
    </section>
</body>
</html>