<?php
    include "koneksi.php";
    $id = $_GET['nim'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/api/data_mahasiswa.php'>";
?>