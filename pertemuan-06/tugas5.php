<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Judul Halaman</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>

<body>
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
</body>
</html>