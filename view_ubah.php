<?php 
require 'functions.php';

$soal = query("SELECT * FROM soal");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>View Question | YPAB</title>
    <link rel="shortcut icon" href="../images/LOGO.png" type="image/x-icon">
</head>
<body>
<a href="index.php">KEMBALI</a>
    <br>

<table class="table">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ID_UJIAN</th>
      <th scope="col">SOAL</th>
      <th scope="col">A</th>
      <th scope="col">B</th>
      <th scope="col">C</th>
      <th scope="col">D</th>
      <th scope="col">E</th>
      <th scope="col">JAWABAN</th>
      <th scope="col">URUT</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
<?php foreach($soal as $row) : ?>

  <tbody>
    <tr>
    <td><?= $row['id_soal']; ?></td>
    <td><?= $row['id_ujian']; ?></td>
    <td><?= $row['soal']; ?></td>
    <td><?= $row['pilihan_1']; ?></td>
    <td><?= $row['pilihan_2']; ?></td>
    <td><?= $row['pilihan_3']; ?></td>
    <td><?= $row['pilihan_4']; ?></td>
    <td><?= $row['pilihan_5']; ?></td>
    <td><?= $row['kunci']; ?></td>
    <td><?= $row['urut']; ?></td>
	<td>
		<a href="ubah.php?id_soal=<?= $row['id_soal']; ?>">UBAH</a>
	</td>
    </tr>

    <?php endforeach; ?>
  </tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>