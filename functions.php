<?php

$conn = mysqli_connect("localhost", "root", "", "ujianonline");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function ubah($post)
{
    global $conn;
    $id_soal = $_POST['id_soal'];
    $id_ujian = $_POST['id_ujian'];
    $soal = $_POST['soal'];
    $pilihan_1 = $_POST['pilihan_1'];
    $pilihan_2 = $_POST['pilihan_2'];
    $pilihan_3 = $_POST['pilihan_3'];
    $pilihan_4 = $_POST['pilihan_4'];
    $pilihan_5 = $_POST['pilihan_5'];
    $kunci = $_POST['kunci'];
    $urut = $_POST['urut'];

    $query = "UPDATE soal SET
                id_ujian = '$id_ujian',
                soal = '$soal',
                pilihan_1 = '$pilihan_1',
                pilihan_2 = '$pilihan_2',
                pilihan_3 = '$pilihan_3',
                pilihan_4 = '$pilihan_4',
                pilihan_5 = '$pilihan_5',
                kunci = '$kunci',
                urut = '$urut'
                WHERE id_soal = $id_soal";

    if (mysqli_query($conn, $query)) {
        return mysqli_affected_rows($conn);
    } else {
        die("Query failed: " . mysqli_error($conn));
    }
}


function tambahmapel($post){
    global $conn;
    $id_ujian = $post["id_ujian"];
    $nama_mapel = $post["nama_mapel"];
    $tanggal = $post["tanggal"];
    $waktu = $post["waktu"];
    $jml_soal = $post["jml_soal"];
    $id_guru = $post["id_guru"];
   
    
    

    $query = "INSERT INTO ujian VALUES ('$id_ujian','$nama_mapel','$tanggal','$waktu','$jml_soal','$id_guru')";   

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function tambah($post){
    global $conn;

    $id_ujian = $_POST['id_ujian'];
    $nama_mapel = addslashes($_POST['nama_mapel']);
    $tanggal = addslashes($_POST['tanggal']);
    $waktu = addslashes($_POST['waktu']);
    $jml_soal = addslashes($_POST['jml_soal']);
    $id_guru = addslashes($_POST['id_guru']);
 

    $query = "UPDATE ujian SET 
                nama_mapel = '$nama_mapel',
                tanggal = '$tanggal',
                waktu = '$waktu',
                jml_soal = '$jml_soal',
                id_guru = '$id_guru',
                File = '$File'
              WHERE id_ujian = '$id_ujian'";

    mysqli_query($conn, $query);

    header("Location: index.php");
    exit();
}

