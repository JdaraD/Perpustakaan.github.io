<?php 

    require '../../functions/functions.php';

    if ( isset($_POST["registerasi"]) ) {
        if (registerasi($_POST) > 0) {
            echo "<script>
                    alert('User baru berhasil ditambahkan! Silakan login.');
                    window.location.href = 'login.php'
                  </script>";
        } else {
            echo "<script>
                alert('Registrasi gagal!');
              </script>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Ceria : Registerasi</title>
    <link rel="stylesheet" href="../../css/registerasi.css">
</head>
<body>
    <div class="register-container">
        
        <div style="flex-grow: 2;" class="container-logo">
            <img src="../../img/logo.png" alt="Logo" width="100px" height="100px">
            <p>Perpus Mars</p>
        </div>

        <div style="flex-grow: 4;" class="container-form">
            <h2>Daftar Akun</h2>
            <form action="" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
                <br>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" required>
                <br>
                <label for="nomorHp">Nomor Hp</label>
                <input type="text" name="nomorHp" id="nomorHp" required>
                <br>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
                <br>
                <label for="password2">konfirmasi Password</label>
                <input type="password" name="password2" id="password2" required>
                <br>
                <div class="agreement">
                    <input type="checkbox" id="agree" required>
                    <label for="agree">Saya setuju dengan <a href="#">syarat & ketentuan</a></label>
                </div>
                <p class="agreement-note">Dengan mendaftar, Anda menyetujui penggunaan data sesuai kebijakan privasi kami.</p>
                <br>
                <button type="submit" class="button" name="registerasi">registerasi</button>
            </form>
            <a href="login.php">kembali ke login</a>
        </div>

    </div>
</body>
</html>