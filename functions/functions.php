<?php 

    // hubungkan ke database
    $conn = mysqli_connect("localhost", "root", "", "perpustakaan");

    // Mengelompokan data dari db ke dalam query
    function query($query) {
        global $conn;
        
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;
    }

    // fungsi registrasi
    function registerasi($data) {
        global $conn;

        $username = strtolower(stripslashes($data["username"]));
        $email = strtolower(stripslashes($data["email"]));
        $nomorHp = strtolower(stripslashes($data["nomorHp"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        // cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

        if( mysqli_fetch_assoc($result) ) {
            echo "<script>
                    alert('username sudah terdaftar!')
                  </script>";
            return false;
        }

        // cek konfirmasi password
        if ( $password !== $password2) {
            echo "<script>
                    alert('Password tidak sesuai!')
                  </script>";
            return false;
        }

        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        $role = 'tamu';

        // tambah user baru ke data base
        $query = "INSERT INTO users (username, email, nomorHp, password, role)
          VALUES ('$username', '$email', '$nomorHp', '$password', '$role')";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);

    }
    
    // login
    function login($data) {
        global $conn;

        $username = $data["username"];
        $password = $data["password"];

        // ambil user dari database
        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

        // cek username
        if ( mysqli_num_rows($result) > 0) {
            // cek password
            $row = mysqli_fetch_assoc($result);
            if ( password_verify($password, $row["password"]) ) {
                // set session
                $_SESSION["login"] = true;

                // cek remember me
                if ( isset($data['remember']) ) {
                    // buat cookie
                    setcookie('id', $row['id'], time() + 60);
                    setcookie('key', hash('sha256', $row['username']), time() + 60);

                }

                header("location: ../home.php");
                exit;
            } else {
                // password salah
                return false;
            }
   
        } else {
            // username tidak ditemukan
            return false;
        }
    } 


?>