<?php
include '../koneksi.php';

$id_barang = $_GET['id_barang'];
$sql = "SELECT * FROM data_barang WHERE id_barang = '$id_barang'";
$query = mysqli_query($connect, $sql);
$barang = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan");
}

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
            <li><a href="../siswa/index.php"><img src="../img/group.png">Data Siswa</a></li>
            <li><a href="../barang/index.php" class="active"><img src="../img/box.png">Data Barang</a></li>
        </ul>

        <div class="container">
            <div class="judul3">
                <h3>Edit Data Barang</h3>
            </div>
    <div class="square2">
        <div class="input">
            <form action="edit.php" method="post">
            <input type="hidden" name="id_barang" value="<?php echo $barang['id_barang']?>"/>
                <p><label>Nama Barang </label>
                    <label class="colon">:</label>
                    <input type="text" name="nama" value="<?php echo $barang['nama_barang']?>" required="required"></label></p>
                </p>
                <p><label>Kategori </label>
                    <label class="colon">:</label>
                    <input type="text" name="kategori" value="<?php echo $barang['kategori']?>" required="required"></label></p>
                </p>
                <p><label>Kondisi </label>
                    <label class="colon">:</label>
                    <input type="text" name="kondisi" value="<?php echo $barang['kondisi']?>" required="required"></label></p>
                </p>
                <p><label>Jumlah Barang </label>
                    <label class="colon">:</label>
                    <input type="text" name="jml_barang" value="<?php echo $barang['jml_barang']?>" required="required"></label></p>
                </p>
                <p><label>Status </label>
                    <label class="colon">:</label>
                    <input type="text" name="status" value="<?php echo $barang['status']?>" required="required"></label></p>
                </p>
                <input type="submit" name="edit" value="EDIT">
            </form>
        </div>
    </div>
    </div>
    </div>
</body>
</html>