<?php
    $koneksi = mysqli_connect("localhost", "root", "", "politeknikdb");

    if(!$koneksi)
    {
        echo "Koneksi ke MySQL Gagal... ";
    }
?>