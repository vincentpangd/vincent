<?php

require 'functions.php';

$ujian = query("SELECT * FROM ujian");

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
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

<select class="form-control" id="kunci_jawaban" name="id_ujian" required>
    <?php foreach ($ujian as $data) : ?>
        <option value="<?= $data["id_ujian"]; ?>"><?= $data["nama_mapel"]; ?></option>
    <?php endforeach; ?>
</select>
<input type="text" name="nama_mapel" value="<?= $ujian[0]["nama_mapel"]; ?>">
<input type="text" name="tanggal" value="<?= $ujian[0]["tanggal"]; ?>">
<input type="text" name="waktu" value="<?= $ujian[0]["waktu"]; ?>">
<input type="text" name="jml_soal" value="<?= $ujian[0]["jml_soal"]; ?>">  
<input type="hidden" name="id_guru" value="<?= $ujian[0]["id_guru"]; ?>">

<div class="form-group">
      <label for="File">FILE PDF</label>
      <input type="file" class="form-control" id="File" name="File" required>
    </div>

    
    
    <button type="submit" name="submit" class="btn btn-primary">Simpan Soal</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>