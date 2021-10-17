<?php
include ("koneksi.php");

$nim		 = $_POST['txtnim'];
$nama		 = $_POST['txtnama'];
$tempatlahir = $_POST['txttempatlahir'];
$tanggallahir= $_POST['datetanggallahirr'];//// kurang r
$jurusan	 = $_POST['txtjurusan'];
$fakultas	 = $_POST['txtfakultas'];

    $query="update mahasiswa set nama='$nama', tempatlahir='$tempatlahir', tanggallahir='$tanggallahir', 
    jurusan='$jurusan', fakultas ='$fakultas' where nim='$nim'";
    $hasil=mysqli_query($conn,$query)or die(mysqli_error($conn));

header("location:index.php");
?>