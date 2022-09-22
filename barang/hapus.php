<?php
include '../koneksi.php';

if(isset($_GET['id_barang'])) {
    header('location: index.php');
}

$id_barang = $_GET['id_barang'];

$sql = "DELETE FROM data_barang WHERE id_barang = '$id_barang'";
$query = mysqli_query($connect, $sql);

if($query){
    header('location: index.php');
}else{
    header('location: hapus.php?status=gagal');
}
?>