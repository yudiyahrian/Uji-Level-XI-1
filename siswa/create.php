<?php
include '../koneksi.php';

if (isset($_POST['create'])) {
$id_siswa = $_POST['id_siswa'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$tgl_lahir = $_POST['tgl_lahir'];
$kelas = $_POST['kelas'];

$sql = "INSERT INTO data_siswa VALUES ('$id_siswa', '$nama', '$gender', '$alamat', '$tgl_lahir','$kelas')";

$query = mysqli_query($connect, $sql);
if ($query) {
    header('location: index.php');
}else{
    header('location: create.php?status=gagal');
}
}
?>