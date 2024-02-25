<!DOCTYPE html>
<html>
<head>
 <title> Cetak laporan PDF </title>
</head>
<body>
 <style type="text/css">
 body{
 font-family: sans-serif;
 }
 table{
 margin: 20px auto;
 border-collapse: collapse;
 }
 table th,
 table td{
 border: 1px solid #3c3c3c;
 padding: 3px 8px;

 }
 a{
 background: blue;
 color: #fff;
 padding: 8px 10px;
 text-decoration: none;
 border-radius: 2px;
 }

    .tengah{
        text-align: center;
    }
 </style>
        <h1 class='tengah'>Cetak laporan PDF <br/> <br/><a href=''> Apang</a></h1>
        <br/>
        <div class='tengah'>
 <a target="_blank" href="cetak.php">Cetak Laporan</a>
        </div>
 <table>
 <tr>
 <th>No</th>
 <th>id_ujian</th>
 <th>soal</th>
 <th>pilihan_1</th>
 <th>pilihan_2</th>
 <th>pilihan_3</th>
 <th>pilihan_4</th>
 <th>pilihan_5</th>
 <th>kunci</th>
 <th>urut</th>
 </tr>
 <?php
 // koneksi database
 $koneksi = mysqli_connect("localhost","root","","ujianonline");

 // menampilkan data Ujian
 $data = mysqli_query($koneksi,"select * from soal");
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
 <td style='text-align: center;'><?php echo $d['id_soal'] ?></td>
 <td><?php echo $d['id_ujian']; ?></td>
 <td><?php echo $d['soal']; ?></td>
 <td><?php echo $d['pilihan_1']; ?></td>
 <td><?php echo $d['pilihan_2']; ?></td>
 <td><?php echo $d['pilihan_3']; ?> </td>
 <td><?php echo $d['pilihan_4']; ?> </td>
 <td><?php echo $d['pilihan_5']; ?> </td>
 <td><?php echo $d['kunci']; ?> </td>
 <td><?php echo $d['urut']; ?> </td>
 </tr>
 <?php
 }
 ?>
 </table>
</body>
</html>