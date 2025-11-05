<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Judul Halaman</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Ini Header</h1>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigaton">
        &#9776;
    </button>
    <nav>
      <ul>
        <li><a href="#home">beranda</a></li>
        <li><a href="#about">tentang</a></li>
        <li><a href="#contact">kontak</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section id="home">
      <h2>Selamat Datang</h2>
      <p>ini contoh paragraf html</p>
    </section>
    <section id="about">
      <?php
        $nim = "2511500086";
        $NIM = "2511500049";
        $Nim = "";

        $nama = "Dedifitrianto";
        $NAMA = "Muhammad Zaky Syanov Ziyad";
        $Nama = "";

        $tempatlahir = "Pangkalpinang";
        $TEMPATLAHIR = "Serang Banten";
        $Tempatlahir = "";

        $tanggallahir = "24 Oktober 2006";
        $TANGGALLAHIR = "11 November 2005";
        $TanggalLahir = "";

        $hoby = "Ngoding";
        $HOBY = "Main Game";
        $Hoby = "";

        $pasangan = "Belum Ada";
        $PASANGAN = "Sudah punya";
        $Pasangan = "";

        $pekerjaan = "Desainer";
        $PEKERJAAN = "Penjaga tempat tidur";
        $Pekerjaan = "";

        $namaortu = "Bapak Asri";
        $NAMAORTU = "Bapak ilhamdi";
        $Namaortu = "";

        $namakakak = "Kakak Nurita";
        $NAMAKAKAK = "Kakak Rina";
        $Namakakak = "";

        $namaadik = "Tidak ada";
        $NAMAADIK = "aqil";
        $Namaadik = "";
      ?>
<p>
            <strong>NIM:</strong>
            <?php
                echo $nim;
            ?>
        </p>
        <p>
            <strong>Nama:</strong>
            <?php
                echo $nama;
            ?> &#168512;
        </p>
        <p>
            <strong>Tempat Lahir:</strong>
            <?php
                echo $tempatlahir;
            ?> &copy;
        </p>
        <p>
            <strong>Tanggal Lahir:</strong>
            <?php
                echo $tanggallahir;
            ?>
        </p>
        <p>
            <strong>Hobby:</strong>
            <?php
                echo $hoby;
            ?> &#128516;
        </p>
        <p>
            <strong>Pasangan:</strong>
            <?php
                echo $pasangan;
            ?> &#9786;
        </p>
        <p>
            <strong>Pekerjaan:</strong>
            <?php
                echo $pekerjaan;
            ?> &quot; &#9786; &quot;
            </p>
        <p>
            <strong>Nama Ortu:</strong>
            <?php
                echo $namaortu;
            ?>
        </p>
        <p>
            <strong>Nama Kakak:</strong>
            <?php
                echo $namakakak;
            ?>    
        </p>
        <p>
            <strong>Nama Adik:</strong>
            <?php
                echo $namaadik;
            ?>
        </p>
    </section>
    <section id="contact">
      <h2>kontak kami</h2>
      <form action="" method="GET">
        <label for="txtNama"><span>Nama:</span>
        <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama">
        </label>

        <label for="txtEmail"><span>Email:</span>
        <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email">
        </label>

        <label for="txtPesan"><span>Pesan:</span>
        <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..."></textarea>
        <small id="charCount">0/200 karakter</small>
        </label>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>
    </section>
  </main>
  <footer>
    <p>&copy; &#9786; 2025 Muhammad Zaky Syanov Ziyad</p>
  </footer>
    <script src="script.js"></script>
</body>

</html>