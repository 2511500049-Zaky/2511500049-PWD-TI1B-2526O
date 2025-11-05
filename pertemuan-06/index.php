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

    <section id="IPK">
      <?php 
      $namamatkul1='Algoritma dan Struktur Data';
        $sksmatkul1='4';
        $nilaihadir1='90';
        $nilaitugas1='60';
        $nilaiuts1='80';
        $nilaiuas1='70';

      $namamatkul2='Agama';
        $sksmatkul2='2';
        $nilaihadir2='70';
        $nilaitugas2='50';
        $nilaiuts2='60';
        $nilaiuas2='80';
      $namamatkul3='Kalkulus';
        $sksmatkul3='6';
        $nilaihadir3='90';
        $nilaitugas3='90';
        $nilaiuts3='75';
        $nilaiuas3='71';
      $namamatkul4='Logika Informatika';
        $sksmatkul4='5';
        $nilaihadir4='81';
        $nilaitugas4='91';
        $nilaiuts4='75';
        $nilaiuas4='80';
      $namamatkul5='Pemrograman Web Dasar';
        $sksmatkul5='3';
        $nilaihadir5='69';
        $nilaitugas5='80';
        $nilaiuts5='90';
        $nilaiuas5='100';

        $nilaiAkhir1 = (0.1 * $nilaihadir1) + (0.2 * $nilaitugas1) + (0.3 * $nilaiuts1) + (0.4 * $nilaiuas1);
        $nilaiAkhir2 = (0.1 * $nilaihadir2) + (0.2 * $nilaitugas2) + (0.3 * $nilaiuts2) + (0.4 * $nilaiuas2);
        $nilaiAkhir3 = (0.1 * $nilaihadir3) + (0.2 * $nilaitugas3) + (0.3 * $nilaiuts3) + (0.4 * $nilaiuas3);
        $nilaiAkhir4 = (0.1 * $nilaihadir4) + (0.2 * $nilaitugas4) + (0.3 * $nilaiuts4) + (0.4 * $nilaiuas4);
        $nilaiAkhir5 = (0.1 * $nilaihadir5) + (0.2 * $nilaitugas5) + (0.3 * $nilaiuts5) + (0.4 * $nilaiuas5);

        ?>
</section>
  </main>
  <footer>
    <p>&copy; &#9786; 2025 Muhammad Zaky Syanov Ziyad</p>
  </footer>
    <script src="script.js"></script>
</body>

</html>