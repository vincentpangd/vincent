<?php
require '../functions.php';

$id_ujian = $_GET['id_ujian'];
$ujian = query("SELECT * FROM ujian WHERE id_ujian = $id_ujian")[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="IMG/LOGO.png" type="image/x-icon">
    <title>PDF ujian</title>
</head>
<body>
<iframe src="FILES/<?= $ujian['File']; ?>" style="height: 100vh; width: 100vw;"></iframe>

</body>
</html>
