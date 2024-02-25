<?php
session_start();
ob_start();

//Mengatur batas login
$timeout = $_SESSION['timeout'];
if(time()<$timeout){
   $_SESSION['timeout'] = time()+5000;
}else{
   $_SESSION['login'] = 0;
}

include("../library/config.php");
//Mengecek status login
if(empty($_SESSION['user']) or empty($_SESSION['pass']) or $_SESSION['login']==0){
   header('location: indexpdf.php');
}
?>

<html>
<head>
   
<title>Guru | Dashboard YPAB</title>
<link rel="shortcut icon" href="../images/LOGO.png" type="image/x-icon">
 
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css"/>
<link type="text/css" rel="stylesheet" href="../assets/dataTables/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/admin.css"/>
<script type="text/javascript" src="../assets/jquery/jquery-2.0.2.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top"> 
   <div class="container">
      <?php include "menu.php"; ?> 

      <a class="#" href="tambah.php"> <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
</svg> Add Question</a>

<a class="#" href="view_ubah.php"> <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg> Change Question</a>
    <button> <a href="indexpdf.php" target="_blank">Cetak Laporan</button></a>
   </div>
</nav>   
<section>   
   <div  class="container">
      <div class="row">
         <div class="col-xs-12" id="content"></div>
   
      </div>
   </div>
</section>
<footer> 
   <div class="container">
      <p class="text-center">Yayasan Pendidikan Advent Batam | Made by Vincent Pang</p>
   </div>
</footer>
   
<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/dataTables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../assets/dataTables/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript" src="../js/admin.js"></script>

</body>
</html>
