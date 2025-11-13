<?php
// Mengecek apakah data dikirim dengan method POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ambil data dari form
  $nim        = $_POST['nim'];
  $nama       = $_POST['nama'];
  $tempat     = $_POST['tempat_lahir'];
  $tanggal    = $_POST['tanggal_lahir'];
  $hobi       = $_POST['hobi'];
  $pasangan   = $_POST['pasangan'];
  $pekerjaan  = $_POST['pekerjaan'];
  $ortu       = $_POST['ortu'];
  $kakak      = $_POST['kakak'];
  $adik       = $_POST['adik'];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Entry Data Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Hasil Entry Data Mahasiswa</h1>
    <p>UTS Pemrograman Web Dasar - Muhammad Zaky Syanov Ziyad (2511500049)</p>
  </header>

  <section>
    <h2>Data Mahasiswa</h2>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
      <p><b>NIM:</b> <?= htmlspecialchars($nim) ?></p>
      <p><b>Nama Lengkap:</b> <?= htmlspecialchars($nama) ?></p>
      <p><b>Tempat Lahir:</b> <?= htmlspecialchars($tempat) ?></p>
      <p><b>Tanggal Lahir:</b> <?= htmlspecialchars($tanggal) ?></p>
      <p><b>Hobi:</b> <?= htmlspecialchars($hobi) ?></p>
      <p><b>Pasangan:</b> <?= htmlspecialchars($pasangan) ?></p>
      <p><b>Pekerjaan:</b> <?= htmlspecialchars($pekerjaan) ?></p>
      <p><b>Nama Orang Tua:</b> <?= htmlspecialchars($ortu) ?></p>
      <p><b>Nama Kakak:</b> <?= htmlspecialchars($kakak) ?></p>
      <p><b>Nama Adik:</b> <?= htmlspecialchars($adik) ?></p>
    <?php else: ?>
      <p>Tidak ada data yang dikirim. Silakan kembali ke halaman utama.</p>
    <?php endif; ?>
  </section>

  <div style="text-align:center; margin-top:20px;">
    <a href="index.php">
      <button>Kembali ke Form</button>
    </a>
  </div>
</body>
</html>
