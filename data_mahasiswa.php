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
    <div class="container col-md-12">
    <div class="card-header bg-primary text-white">
        Tabel Data Mahasiswa
    </div>   
    <br>
    <form method="GET" action="">
        Cari Nama <input type="text" name="s">
        <input type="submit" value="cari">
    </form>
        <div class="card-body">
            <a href="index.php" class="btn btn-primary">Tambah Data</a>
            <br>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>ANGKATAN</th>
                    <th>SEMESTER</th>
                    <th>IPK</th>
                    <th>EMAIL</th>
                    <th>TELEPON</th>
                </tr>
            <?php
                include "koneksi.php";
                $no = 1;
                $nama = "";
                if (isset($_GET['s']))
                {
                    $nama = $_GET['s'];
                    $tampil = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nama LIKE '%$nama'");
                }else
                $tampil = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                while ($data = mysqli_fetch_array($tampil))
                {

            ?>
            <tr>
                    <td><?php echo $no++;?> </td>
                    <td><?php echo $data ['nim']?></td>
                    <td><?php echo $data ['nama']?></td>
                    <td><?php echo $data ['angkatan']?></td>
                    <td><?php echo $data ['semester']?></td>
                    <td><?php echo $data ['IPK']?></td>
                    <td><?php echo $data ['email']?></td>
                    <td><?php echo $data ['telepon']?></td>
            <td>
                    <a href="edit_data.php?nim=<?php echo $data['nim'];?>" class="btn btn-sm btn-dark">Edit</a>
                    <a href="hapus_data.php?nim=<?php echo $data['nim'];?>" class="btn btn-sm btn-danger">Hapus</a>
            </td>
            </tr>

            <?php } ?>
            </table>
        </div>
    </body>
</html>