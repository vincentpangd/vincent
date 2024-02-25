<?php
require '../library/config.php';
require '../functions.php';

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
  <title>Guru | Tambah Soal YPAB</title>
<link rel="shortcut icon" href="../images/LOGO.png" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <h2>Form Input Soal</h2>
  <form class="form" action="" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id_soal" value="<?= $soal["id_soal"]; ?>">



<!-- Assuming $ujian is an array containing multiple rows of data -->
<select class="form-control" id="kunci_jawaban" name="id_ujian" required>
    <?php foreach ($ujian as $data) : ?>
        <option value="<?= $data["id_ujian"]; ?>"><?= $data["nama_mapel"]; ?></option>
    <?php endforeach; ?>
</select>

    <div class="form-group">
      <label for="pertanyaan">Pertanyaan:</label>
      <textarea class="form-control" id="pertanyaan" name="soal" rows="3" required></textarea>
    </div>
    
    <div class="form-group">
      <label for="jawaban_a">Jawaban A:</label>
      <input type="text" class="form-control" id="jawaban_a" name="pilihan_1"  required>
    </div>
    
    <div class="form-group">
      <label for="jawaban_b">Jawaban B:</label>
      <input type="text" class="form-control" id="jawaban_b" name="pilihan_2"  required>
    </div>
    
    <div class="form-group">
      <label for="jawaban_c">Jawaban C:</label>
      <input type="text" class="form-control" id="jawaban_c" name="pilihan_3" required>
    </div>
    
    <div class="form-group">
      <label for="jawaban_d">Jawaban D:</label>
      <input type="text" class="form-control" id="jawaban_d" name="pilihan_4" required>
    </div>
    
    <div class="form-group">
      <label for="jawaban_e">Jawaban E:</label>
      <input type="text" class="form-control" id="jawaban_e" name="pilihan_5" required>
    </div>
    
    <div class="form-group">
      <label for="kunci_jawaban">Kunci Jawaban:</label>
      <select class="form-control" id="kunci_jawaban" name="kunci" required>
        <option value="1">A</option>
        <option value="2">B</option>
        <option value="3">C</option>
        <option value="4">D</option>
        <option value="5">E</option>
      </select>
    </div>
    <input type="hidden" name="urut" >
    <button type="submit" name="submit" class="btn btn-primary">Simpan Soal</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>