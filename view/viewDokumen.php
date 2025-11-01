<?php 
include 'functions/functions.php';

// Pastikan koneksi database aktif
if (!$conn) {
    die("Koneksi database gagal");
}

// Cek apakah ID dikirim
if (!isset($_GET['id'])) {
    die("ID tidak ditemukan.");
}

$id = (int) $_GET['id'];

// Ambil data berdasarkan ID
$result = mysqli_query($conn, "SELECT * FROM daftarbuku WHERE id = $id");

if (mysqli_num_rows($result) === 0) {
    die("Data buku tidak ditemukan.");
}

$data = mysqli_fetch_assoc($result);

// Tentukan path file
$file = 'books/' . $data['buku'];

if (!file_exists($file)) {
    die("❌ File tidak ditemukan di folder /books/");
}

$ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
$urlFile = "http://localhost/perpustakaan/books/" . $data['buku']; // URL publik file

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratinjau Dokumen - <?= htmlspecialchars($data['judul'] ?? 'Buku'); ?></title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #111;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        iframe {
            width: 90vw;
            height: 95vh;
            border: none;
        }
        .pesan {
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
// --- Tampilkan berdasarkan tipe file ---
if ($ext === 'pdf') {
    echo "<iframe src='$urlFile'></iframe>";
} elseif (in_array($ext, ['doc', 'docx'])) {
    echo "<iframe src='https://docs.google.com/gview?url=$urlFile&embedded=true'></iframe>";
} else {
    echo "<div class='pesan'>Format file tidak didukung untuk pratinjau.</div>";
}
?>
</body>
</html>
