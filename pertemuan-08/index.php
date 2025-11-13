<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS PWD - Entry Data Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Entry Data Mahasiswa</h1>
    <p>UTS Pemrograman Web Dasar - Muhammad Zaky Syanov Ziyad (2511500049)</p>
  </header>

  <!-- Section Entry Data Mahasiswa -->
  <section id="entrydata">
    <h2>Form Entry Data</h2>
    <form action="proses.php" method="POST">
      <label>NIM:</label>
      <input type="text" name="nim" placeholder="Masukkan NIM" required>

      <label>Nama Lengkap:</label>
      <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" required>

      <label>Tempat Lahir:</label>
      <input type="text" name="tempat_lahir">

      <label>Tanggal Lahir:</label>
      <input type="date" name="tanggal_lahir">

      <label>Hobi:</label>
      <input type="text" name="hobi">

      <label>Pasangan:</label>
      <input type="text" name="pasangan">

      <label>Pekerjaan:</label>
      <input type="text" name="pekerjaan">

      <label>Nama Orang Tua:</label>
      <input type="text" name="ortu">

      <label>Nama Kakak:</label>
      <input type="text" name="kakak">

      <label>Nama Adik:</label>
      <input type="text" name="adik">

      <div class="btn">
        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </div>
    </form>
  </section>

  <!-- Section About -->
  <section id="about">
    <h2>Tentang Saya</h2>
    <p>Data dari form akan tampil di halaman hasil (proses.php).</p>
  </section>
</body>
</html>
