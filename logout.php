<?php
  session_start();
  session_destroy();
  echo "<script>
      alert('Anda telah logout dari halaman guru!'); 
      window.location = '../logina.php';
      </script>";
?>
