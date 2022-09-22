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
            <li><a href="../siswa/index.php" ><img src="../img/group.png">Data Siswa</a></li>
            <li><a href="#" class="active"><img src="../img/box.png">Data Barang</a></li>
        </ul>
    </div>

    <!-- main -->

<div class="container">
    <div class="judul2">
        <h3>Data Barang</h3>
    </div>

    <h3 class="buat"><a href="isi_barang.html">CREATE</a></h3>

    <div class="square">
    
        <div class="table1">
        <table>
            <tr>
                <th>Id Barang</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Kondisi</th>
                <th>Jumlah <br> Barang</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            <?php
            $sql = "SELECT * FROM data_barang";
            $query = mysqli_query($connect,$sql);
            while($barang = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$barang['id_barang']."</td>";
                echo "<td>".$barang['nama_barang']."</td>";
                echo "<td>".$barang['kategori']."</td>";
                echo "<td>".$barang['kondisi']."</td>";
                echo "<td>".$barang['jml_barang']."</td>";
                echo "<td>".$barang['status']."</td>";

                echo "<td>";
                echo "<a class='edit' href='formedit.php?id_barang=".$barang['id_barang']."'>Edit</a> | ";
                echo "<a class='hapus' href='hapus.php?id_barang=".$barang['id_barang']."'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
        </div>
        
    </div>
        
</div>

<form action="search.php" method="get">
	<input id="search" type="text" name="cari" required="require" placeholder="Search">
	<input id="btn-search" type="image" src="../img/magnifying-glass.png">
</form>
    
</body>
</html>