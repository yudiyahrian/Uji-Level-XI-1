<?php
include '../koneksi.php';

if(isset($_POST['edit'])) {
    $id_barang = $_POST['id_barang'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $kondisi = $_POST['kondisi'];
    $jml_barang = $_POST['jml_barang'];
    $status = $_POST['status'];

$sql = "UPDATE data_barang SET nama_barang='$nama', kategori='$kategori', kondisi='$kondisi', jml_barang='$jml_barang', status='$status' WHERE id_barang='$id_barang'";

$query = mysqli_query($connect, $sql);
if($query){
    header('location: index.php');
}else{
    header('location: edit.php?status=gagal');
}
}
?>