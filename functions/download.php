<?php 
    include __DIR__ . '/functions.php';

    // fungsi download
    if(isset($_GET['id']) ) {
        $id = $_GET['id'];

        $databuku = mysqli_query($conn, "SELECT * FROM daftar_buku WHERE id = $id");
        
        if(mysqli_num_rows($databuku) === 1) {
            $buku = mysqli_fetch_assoc($databuku);
            $filename = $buku['buku'];
            $file = __DIR__ . '/../books/' . $filename;

            if(file_exists($file)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename='.basename($file) . "");
                // header('Content-Transfer-Encoding: binary');
                header('Expires: 0');
                header('Cache-Control: private');
                header('Pragma: public');
                header('Content-Length: ' . filesize($file));
                // ob_clean();
                flush();
                readfile($file);
    
                exit;
            } else {
                $_SESSION['pesan'] = "Oops! File - $filename - not found ...";
                header("location:/perpustakaan/?page=daftarBuku");
            }

        } else {
        $_SESSION['pesan'] = "Data tidak ditemukan di database.";
        header("Location: index.php?page=daftarBuku");
        exit;
        }

    }
?>