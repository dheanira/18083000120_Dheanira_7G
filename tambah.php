<?php
include("koneksi.php");

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$tempatlahir=$_POST['tempatlahir'];
$tanggallahir=$_POST['tanggallahir'];
$jurusan=$_POST['jurusan'];
$fakultas=$_POST['fakultas'];

mysqli_query($conn,"insert into mahasiswa values('$nim','$nama','$tempatlahir','$tanggallahir','$jurusan','$fakultas')");

header("location:form_tambah.php");
?>