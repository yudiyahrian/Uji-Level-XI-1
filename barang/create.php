<?php
include '../koneksi.php';

if (isset($_POST['create'])) {
$id_barang = $_POST['id_barang'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$kondisi = $_POST['kondisi'];
$jml_barang = $_POST['jml_barang'];
$status = $_POST['status'];

$sql = "INSERT INTO data_barang VALUES ('$id_barang', '$nama', '$kategori', '$kondisi', '$jml_barang','$status')";

$query = mysqli_query($connect, $sql);
if ($query) {
    header('location: index.php');
}else{
    header('location: create.php?status=gagal');
}
}
?>