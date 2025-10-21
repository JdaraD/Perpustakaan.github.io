<?php 

    session_start();
    require '../../functions/functions.php';

    // cek cookie
    if ( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        // ambil username berdasarkan id
        $result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");
        $row = mysqli_fetch_assoc($result);

        // cek cookie dan username
        if ( $key === hash('sha256', $row['username']) ) {
            $_SESSION['login'] = true;
        }
    }

    if ( isset($_SESSION["login"]) ) {
        header("location: ../../home.php");
        exit;
    }

    // cek tombol login sudah ditekan atau belum
    if ( isset($_POST["login"]) ) {
        $error = !login($_POST);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Ceria : Login</title>
    <link rel="stylesheet" href="../../css/login.css">
</head>
<body>
    <div class="login-container">
        
        <div style="flex-grow: 2;" class="container-logo">
            <img src="../../img/logo.png" alt="Logo" width="100px" height="100px">
            <p>Perpus Mars</p>
        </div>

        <div style="flex-grow: 4;" class="container-form">
            <h3>Selamat datang</h3>

            <?php if( isset($error) ) : ?>
                <p style="color: red; font-style: italic;">Username / Password salah!</p>
            <?php endif; ?>

            <form action="" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
                <br>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
                <br>
                <div class="remember">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember Me</label>
                </div>
                <br>
                <button type="submit" class="button" name="login">Login</button>
            </form>
            <a href="registerasi.php">registrasi</a>
        </div>

    </div>
</body>
</html>