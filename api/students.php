<?php
header('Content-Type: application/json; charset=utf8');

include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM mahasiswa";
    $query = mysqli_query($koneksi, $sql);
    $array_data = array();
    while ($data = mysqli_fetch_assoc($query)) {
        $array_data[] = $data;
    }
    echo json_encode($array_data);

}else if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim            = $_POST['nim'];
    $nama           = $_POST['nama'];
    $angkatan       = $_POST['angkatan'];
    $semester       = $_POST['semester'];
    $IPK            = $_POST['IPK'];
    $email          = $_POST['email'];
    $telepon        = $_POST['telepon'];
    $sql = "INSERT INTO mahasiswa (nim, nama, angkatan, semester, IPK, email, telepon)
            VALUES('$nim','$nama','$angkatan','$semester','$IPK','$email','$telepon')";
    $cek = mysqli_query($koneksi, $sql);

    if ($cek) {
        $data = [
            'status' => "berhasil"
        ];
        echo json_encode([$data]);
    } else {
        $data = [
            'status' => "gagal"
        ];
        echo json_encode([$data]);
    }

}else if($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $id = $_GET['id'];
    $sql ="DELETE FROM mahasiswa WHERE id='$id'";
    $cek = mysqli_query($koneksi, $sql);

    if ($cek) {
        $data = [
            'status' => "berhasil"
        ];
        echo json_encode([$data]);
    } else {
        $data = [
            'status' => "gagal"
        ];
        echo json_encode([$data]);
    }

}else if($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $id             = $_POST['id'];
    $nim            = $_POST['nim'];
    $nama           = $_POST['nama'];
    $angkatan       = $_POST['angkatan'];
    $semester       = $_POST['semester'];
    $IPK            = $_POST['IPK'];
    $email          = $_POST['email'];
    $telepon        = $_POST['telepon'];
    $sql = "UPDATE mahasiswa
            SET nim='$nim', nama='$nama', angkatan='$angkatan', semester='$semester', IPK='$IPK', email='$email', telepon='$telepon'
            WHERE id='$id')";
    $cek = mysqli_query($koneksi, $sql);
}