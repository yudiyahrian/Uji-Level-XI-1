<?php
include '../koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uji Level XI</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">

    <!-- Oxygen Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">

</head>
<body>

    <!-- Dashboard -->
    <div class="dashboard">
    <a href="../index.php" class="logo"><img src="../img/logo.png">SarPras</a>
    <hr>
        <ul>
            <li><a href="index.php" class="active"><img src="../img/group.png">Data Siswa</a></li>
            <li><a href="../barang/index.php"><img src="../img/box.png">Data Barang</a></li>
        </ul>
    </div>

    <!-- main -->

<div class="container">
    <div class="judul">
        <h3>Data Siswa</h3>
    </div>

    <a class="back" href="index.php">Kembali</a>


<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b class='hasil' >Hasil Pencarian : ".$cari."</b>";
}
?>
 
 <div class="square">
    <div class="table1">
    <table>
	<tr>
		<th>Id Siswa</th>
		<th>Nama Siswa</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
		<th>Tanggal <br> Lahir</th>
		<th>Kelas</th>
		<th>Action</th>
	</tr>

    <?php

	if(isset($_GET['cari'])){
        $sql = "select * from data_siswa where nama_siswa like '%".$cari."%'";
		$cari = $_GET['cari'];
		$data = mysqli_query($connect, $sql);				
	}else{
        $sql2 = "select * from data_siswa";
		$data = mysqli_query($connect, $sql2);		
	}

	$no = 1;
    while($siswa = mysqli_fetch_array($data)){
        echo "<tr>";
        echo "<td>".$siswa['id_siswa']."</td>";
        echo "<td>".$siswa['nama_siswa']."</td>";
        echo "<td>".$siswa['jenis_kelamin']."</td>";
        echo "<td>".$siswa['alamat']."</td>";
        echo "<td>".$siswa['tgl_lahir']."</td>";
        echo "<td>".$siswa['kelas']."</td>";

        echo "<td>";
        echo "<a class='edit' href='formedit.php?id_siswa=".$siswa['id_siswa']."'>Edit</a> | ";
        echo "<a class='hapus' href='hapus.php?id_siswa=".$siswa['id_siswa']."'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";

?>
    </div>
 </div>

