<?php
include '../koneksi.php';

if(isset($_POST['edit'])) {
    $id_siswa = $_POST['id_siswa'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

$sql = "UPDATE data_siswa SET nama_siswa='$nama', jenis_kelamin='$gender', tgl_lahir='$tgl_lahir', kelas='$kelas', alamat='$alamat' WHERE id_siswa='$id_siswa'";

$query = mysqli_query($connect, $sql);
if($query){
    header('location: index.php');
}else{
    header('location: edit.php?status=gagal');
}
}
?>