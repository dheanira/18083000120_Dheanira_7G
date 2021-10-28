<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Data Mahasiswa</title>
<body>

    <h1><center>TAMBAHKAN DATA</center></h1></br>
    <div class="container">
    <form method="POST" action="tambah.php">
    <form>
      <div class="mb-3">
         <label class="form-label">NIM</label>
         <input type="text" class="form-control" id="exampleInputEmail1" name="nim" required >
      </div>
      <div class="mb-3">
         <label class="form-label">Nama Mahasiswa</label>
         <input type="text" class="form-control" id="exampleInputEmail1" name="nama" required >
      </div>
      <div class="mb-3">
         <label class="form-label">Tempat Lahir</label>
         <input type="text" class="form-control" id="exampleInputEmail1" name="tempatlahir" required >
      </div>
      <div class="mb-3">
         <label class="form-label">Tanggal Lahir</label>
         <input type="date" class="form-control" id="exampleInputEmail1" name="tanggallahir" required >
      </div>
      <div class="mb-3">
         <label class="form-label">Jurusan</label>
         <input type="text" class="form-control" id="exampleInputEmail1" name="jurusan" required >
      </div>
      <div class="mb-3">
         <label class="form-label">Fakultas</label>
         <input type="text" class="form-control" id="exampleInputEmail1" name="fakultas" required >
      </div>     
      <button type="submit" class="btn btn-primary" value="Simpan Data" name="" >Simpan Data</button>
      <a class="btn btn-success" href="index.php">Lihat Data Mahasiswa</a>
   </form>
</body>
</html>