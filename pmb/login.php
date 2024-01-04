<?php
    include 'koneksi.php';
    if(isset($_POST['login'])){
        //!--cek
         $cek = mysqli_query($conn,"SELECT * FROM tb_admin 
            WHERE username ='".$_POST['user']."' AND password = '".$_POST['pass']."'");
            if(mysqli_num_rows($cek) > 0) {
                echo 'akun ada';
            }else{
                echo 'akun tidak ada';
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
 <style>
        .main-login {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items:center;
        }
        .box-login{
            width: 320px;
            min-height: 200px;
            border:1px solid;
        }
       .box-login h2 {
            text-align: center;
        }

    </style>
</head>
<body>
    <!-- bagian main login-->
        <section>
            <div class="main-login">
                <div class="box-login">
                <h2> Login admin</h2>
                <!-- bagian form login-->
                <form action="" method="post>"
                <div class="box">
                    <table>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="user" class ="input-control">
                            </td>
                        </tr>
                         <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td>
                                <input type="password" name="pass" class ="input-control">
                            </td>
                        </tr>
                         <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="login" value="Login">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
    </form>
        </section>
</body>
</body>
</html>