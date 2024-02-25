<?php 
require 'functions.php';

$id = $_GET["id_soal"];

$soal = query("SELECT * FROM soal WHERE id_soal = $id")[0];
$ujian = query("SELECT * FROM ujian");
if (isset($_POST["submit"]) ) {
    if(ubah($_POST) > 0){
        echo "<script>
            alert('Data Berhasil di Ubah');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal di Ubah');
            document.location.href = 'index.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit Soal | YPAB</title>
    <link rel="shortcut icon" href="../images/LOGO.png" type="image/x-icon">
    <style>
        body {
            padding: 20px;
        }
        h3 {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <a href="view_ubah.php">KEMBALI</a>
    <br>
    <br>
    <h3>EDIT DATA MAHASISWA</h3>

        <form method="post" action="" enctype="multipart/form-data">
            <input type="hidden" name="id_soal" value="<?php echo $soal['id_soal']; ?>">
            <div class="form-group">
            <label for="id_ujian">Pilih Nama Mapel:</label>
            <select class="form-control" id="id_ujian" name="id_ujian" required>
                <?php foreach ($ujian as $data) : ?>
                    <option value="<?= $data["id_ujian"]; ?>" <?php echo ($data['id_ujian'] == $soal['id_ujian']) ? 'selected' : ''; ?>>
                        <?= $data["nama_mapel"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="soal">Soal:</label>
            <input type="text" class="form-control" id="soal" name="soal" value="<?php echo $soal['soal']; ?>">
        </div>

        <div class="form-group">
            <label for="pilihan_1">pilihan_1:</label>
            <input type="text" class="form-control" id="pilihan_1" name="pilihan_1" value="<?php echo $soal['pilihan_1']; ?>">
        </div>

        <div class="form-group">
            <label for="pilihan_2">pilihan_2:</label>
            <input type="text" class="form-control" id="pilihan_2" name="pilihan_2" value="<?php echo $soal['pilihan_2']; ?>">
        </div>

        <div class="form-group">
            <label for="pilihan_3">pilihan_3:</label>
            <input type="text" class="form-control" id="pilihan_3" name="pilihan_3" value="<?php echo $soal['pilihan_3']; ?>">
        </div>

        <div class="form-group">
            <label for="pilihan_4">pilihan_4:</label>
            <input type="text" class="form-control" id="pilihan_4" name="pilihan_4" value="<?php echo $soal['pilihan_4']; ?>">
        </div>

        <div class="form-group">
            <label for="pilihan_5">pilihan_5:</label>
            <input type="text" class="form-control" id="pilihan_5" name="pilihan_5" value="<?php echo $soal['pilihan_5']; ?>">
        </div>
        
                <tr>
                    <td>Kunci Jawaban:</td>
                    <td>
                        <select class="form-control" name="kunci" required>
                            <option value="1" <?= ($soal["kunci"] == 1) ? 'selected' : ''; ?>>A</option>
                            <option value="2" <?= ($soal["kunci"] == 2) ? 'selected' : ''; ?>>B</option>
                            <option value="3" <?= ($soal["kunci"] == 3) ? 'selected' : ''; ?>>C</option>
                            <option value="4" <?= ($soal["kunci"] == 4) ? 'selected' : ''; ?>>D</option>
                            <option value="5" <?= ($soal["kunci"] == 5) ? 'selected' : ''; ?>>E</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <br>
                    <td>
                        <input type="hidden" name="urut" value="<?= $soal["urut"]; ?>">
                        <button type="submit" name="submit" value="SIMPAN" class="btn btn-primary">Simpan Soal</button>
                    </td>
                </tr>
            </table>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
