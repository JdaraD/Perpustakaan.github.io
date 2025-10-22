<?php 
    
    session_start();
    require 'functions/functions.php';

    // if ( !isset($_SESSION["login"]) ) {
    //     header("location: /perpustakaan/view/auth/login.php");
    //     exit;
    // }

    //  cek halaman yang diakses
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    // tentukan file yang akan di-include
    $page_file = __DIR__ . "/view/" . $page . ".php";

    // jika file tidak ada, tampilkan halaman 404
    if ( !file_exists($page_file) ) {
        $page_file = __DIR__ . "/view/404.php";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Ceria</title>
    <!-- css -->
    <link rel="stylesheet" href="/perpustakaan/css/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/perpustakaan/css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/perpustakaan/css/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/perpustakaan/css/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/perpustakaan/css/daftarBuku.css?v=<?php echo time(); ?>">

</head>
<body>
    <!-- header start -->
     <?php include __DIR__ . '/view/layouts/header.php'; ?>
    <!-- header end -->

    <!-- page content start -->
    <main class="content">
        <?php include $page_file; ?>
    </main>

    <!-- page content end -->

    <!-- footer start -->
     <?php include __DIR__ . '/view/layouts/footer.php'; ?>
    <!-- footer end -->
    
    <!-- js -->
    <script src="/perpustakaan/js/index.js?v=<?php echo time(); ?>"></script>
</body>
</html>