<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-11">
    <div class="card-header bg-primary text-white">
        Input Data Mahasiswa
    </div>   

<div class="card-body">
    <form action="" method="POST" class="form-item">
    <form>
    <div class="form-group">
    <label for="nim"> NIM </label>
    <input type="text" name="nim" class="form-control col-md-9" placeholder="Masukkan NIM">
    </div>

    <div class="form-group">
    <label for="nama"> NAMA MAHASISWA </label>
    <input type="text" name="nama" class="form-control col-md-9" placeholder="Masukkan Nama Mahasiswa">
    </div>

    <div class="form-group">
    <label for="angkatan"> ANGKATAN </label>
    <input type="text" name="angkatan" class="form-control col-md-9" placeholder="Angkatan Tahun Berapa?">
    </div>

    <div class="form-group">
    <label for="semester"> SEMESTER </label>
    <input type="text" name="semester" class="form-control col-md-9" placeholder="Semester Berapa?">
    </div>

    <div class="form-group">
    <label for="IPK"> IPK </label>
    <input type="text" name="IPK" class="form-control col-md-9" placeholder="Masukkan IPK">
    </div>

    <div class="form-group">
    <label for="email"> EMAIL</label>
    <input type="text" name="email" class="form-control col-md-9" placeholder="Masukkan Email">
    </div>

    <div class="form-group">
    <label for="telepon"> TELEPON </label>
    <input type="text" name="telepon" class="form-control col-md-9" placeholder="Masukkan No.Telepon">
    </div>

    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
    <d>
    <button type="reset" class="btn btn-warning">RESET DATA</button>
    </d>
    <button type="submit" class="btn btn-danger" name="batal">BATAL</button>
    </div>  
    </form>
</body>
</html>

<?php
    include "koneksi.php";
    if(isset($_POST['simpan']))
    {
        $nim            = $_POST['nim'];
        $nama           = $_POST['nama'];
        $angkatan       = $_POST['angkatan'];
        $semester       = $_POST['semester'];
        $IPK            = $_POST['IPK'];
        $email          = $_POST['email'];
        $telepon        = $_POST['telepon'];
        
        mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES(
        '$id','$nim','$nama','$angkatan','$semester','$IPK','$email','$telepon'
        )") or die(mysqli_error($koneksi));

        echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan....</h5></div>";
        echo "<meta http-equiv='refresh' content='1;url=http://localhost/api/data_mahasiswa.php'>";
    }
    if(isset($_POST['batal']))
    {
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/api/data_mahasiswa.php'>";
    }

?>