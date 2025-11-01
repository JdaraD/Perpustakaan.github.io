<?php
include __DIR__ . '/functions.php';

// Koneksi database
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// ====== CEK ID ======
if (!isset($_GET['id'])) {
    die("<h3>ID tidak ditemukan.</h3>");
}

$id = (int) $_GET['id'];

// ====== AMBIL DATA BERDASARKAN ID ======
$result = mysqli_query($conn, "SELECT * FROM daftarbuku WHERE id = $id");

if (mysqli_num_rows($result) === 0) {
    die("<h3>Data buku tidak ditemukan.</h3>");
}

$data = mysqli_fetch_assoc($result);
$fileName = $data['buku'] ?? '';

if (!$fileName) {
    die("<h3>Nama file tidak ditemukan dalam database.</h3>");
}

$filePath = __DIR__ . '/books/' . $fileName;

// ====== CEK FILE ADA ======
if (!file_exists($filePath)) {
    die("<h3>File tidak ditemukan di folder /books/</h3>");
}

// ====== CEK EKSTENSI ======
$ext = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
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
            background: white;
        }
        .pesan {
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
// ====== PREVIEW FILE ======
if ($ext === 'pdf') {
    // Tampilkan PDF langsung dari folder lokal
    echo "<iframe src='books/$fileName'></iframe>";
} elseif (in_array($ext, ['doc', 'docx'])) {
    // Tampilkan pesan bahwa file perlu diunduh (Google Viewer tidak bisa lokal)
    echo "<div class='pesan'>
            Format DOC/DOCX tidak bisa ditampilkan langsung di localhost.<br>
            <a href='books/$fileName' style='color: #0ff;'>Klik di sini untuk mengunduh</a>.
          </div>";
} else {
    echo "<div class='pesan'>Format file tidak didukung untuk pratinjau.</div>";
}
?>

</body>
</html>
