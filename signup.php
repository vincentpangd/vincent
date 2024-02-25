<?php
require_once("connect.php");
require_once("functiona.php");
session_start();

if (isset($_POST['signup'])) {
  $id_siswa = santize($_POST['id_siswa']);
  $nis = santize($_POST['nis']);
  $nama = santize($_POST['nama']);
  $tmpt_lahir = santize($_POST['tmpt_lahir']);
  $tgl_lahir = santize($_POST['tgl_lahir']);
  $jk = santize($_POST['jk']);
  $inputpassword = santize($_POST['password']);
  $password = ($inputpassword);
  $id_kelas = santize($_POST['id_kelas']);
  $id_adm = santize($_POST['id_adm']);

  $siswa = "INSERT INTO siswa (id_siswa, nis,nama,tmpt_lahir,tgl_lahir,jk,password,id_kelas,id_adm) VALUES ('$id_siswa','$nis','$nama','$tmpt_lahir','$tgl_lahir','$jk','$password','$id_kelas','$id_adm')";

  if (mysqli_query($conn, $siswa)) {
    $_SESSION['msg'] = "You have Signed Up Successfully";
    $_SESSION['class'] = "text-bg-success";
    header("Location: index.php");
    exit();
  } else {
    $_SESSION['msg'] = "Sign Up failed";
    $_SESSION['class'] = "text-bg-danger";
    header("Location: index.php");
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz SignUp</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style1.css">
</head>

<body>
  <section class="main-section">
    <div class="container">
      <div class="row justify-content-center align-items-center" style="height:100vh;">
        <div class="col-md-7 col-lg-4">
          <div class="box rounded">
            <div class="img-2"></div>
            <div class="login-box p-5">
              <h2 class="pb-4">Sign Up</h2>
              <form action="" method="post">
                <div class="mb-4">
                  <input type="id" class="form-control" placeholder="Enter ID" name="id_siswa" required>
                </div>
                <div class="mb-4">
                  <input type="text" class="form-control" placeholder="Enter nis address" name="nis" required>
                </div>
                <div class="mb-4">
                  <input type="text" class="form-control" placeholder="Enter nama" name="nama" required>
                </div>

                <div class="mb-4">
                  <input type="text" class="form-control" placeholder="Enter tmpt_lahir" name="tmpt_lahir" required>
                </div>

                <div class="mb-4">
                  <input type="date" class="form-control" placeholder="Enter tgl_lahir" name="tgl_lahir" required>
                </div>

                <div class="mb-4">
                  <input type="option" class="form-control" placeholder="Enter jk" name="jk" required>
                </div>

                <div class="mb-4">
                  <input type="password" class="form-control" placeholder="Enter password" name="password" required>
                </div>

                 <div class="mb-4">
                  <input type="id" class="form-control" placeholder="Enter id_kelas" name="id_kelas" required>
                </div>

                 <div class="mb-4">
                  <input type="id" class="form-control" placeholder="Enter id_adm" name="id_adm" required>
                </di>


                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary-1" name="signup">Sign Up</button>
                </div>
              </form>

              <div class="py-4 text-center">
                <a href="login.php" class="link">Login</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>