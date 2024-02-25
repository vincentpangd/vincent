<?php

require 'functions.php';

$ujian = query("SELECT * FROM ujian");

if (isset($_POST["submit"])) {
    if (tambahmapel($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil di Tambahkan');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal di Tambahkan');
            document.location.href = 'index.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guru | Tambah PDF YPAB</title>
<link rel="shortcut icon" href="../images/LOGO.png" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <h2>Form Input Soal</h2>
  <form class="form" action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="id_ujian"></label>
          <input type="text" id="id_ujian" name="id_ujian" required="" placeholder="Masukkan id_ujian">
        </div>
        <br>
        <div class="form-group">
          <label for="nama_mapel"></label>
          <input type="text" id="nama_mapel" name="nama_mapel" required="" placeholder="Masukkan nama_mapel">
        </div>
        <br>

        <div class="form-group">
          <label for="tanggal"></label>
          <input type="date" id="tanggal" name="tanggal" required="" placeholder="Masukkan tanggal">
        </div>
        <br>

        <div class="form-group">
          <label for="waktu"></label>
          <input type="text" id="waktu" name="waktu" required="" placeholder="Masukkan waktu">
        </div>
        <br>

        <div class="form-group">
          <label for="jml_soal"></label>
          <input type="text" id="jml_soal" name="jml_soal" required="" placeholder="Masukkan jml_soal">
        </div>
<br></br>

     <div class="form-group">
          <label for="id_guru"></label>
          <input type="hidden" id="id_guru" name="id_guru" required="" placeholder="Masukkan id_guru">
        </div>


        <form>
    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>

        </form>

        </label>


        
    </div>
</body>
</html>