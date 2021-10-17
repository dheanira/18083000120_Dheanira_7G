<html>
<title>Data Mahasiswa</title>
<body>

    <h1><center>TAMBAHKAN DATA</center></h1></br>

    <form method="POST" action="tambah.php">
    <table align="center" cellpadding="5" cellspacing="0">
       <tr>
           <td>NIM</td>
           <td><input type="text" name="nim"></td>
        </tr>
        <tr>
           <td>Nama Mahasiswa</td>
           <td><input type="text" name="nama"></td>
        </tr>
        <tr>
           <td>Tempat Lahir</td>
           <td><input type="text" name="tempatlahir"></td>
        </tr>
        <tr>
           <td>Tanggal Lahir</td>
           <td><input type="date" name="tanggallahir"></td>
        </tr>
        <tr>
           <td>Jurusan</td>
           <td><input type="text" name="jurusan"></td>
        </tr>
        <tr>
           <td>Fakultas</td>
           <td><input type="text" name="fakultas"></td>
        </tr>
        <tr>
           <td></td>
           <td align="right" colspan="3"><input type="submit" name="" value="Simpan Data">
        </tr> 
    </table> 
        <center><a href="index.php">Lihat Data Mahasiswa</a></center>
    </form>

</body>
</html>