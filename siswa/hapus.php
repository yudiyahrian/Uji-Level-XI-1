<?php
include '../koneksi.php';

if(isset($_GET['id_siswa'])) {
    header('location: index.php');
}

$id_siswa = $_GET['id_siswa'];

$sql = "DELETE FROM data_siswa WHERE id_siswa = '$id_siswa'";
$query = mysqli_query($connect, $sql);

if($query){
    header('location: index.php');
}else{
    header('location: hapus.php?status=gagal');
}
?>