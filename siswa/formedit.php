<?php
include '../koneksi.php';

$id_siswa = $_GET['id_siswa'];
$sql = "SELECT * FROM data_siswa WHERE id_siswa = '$id_siswa'";
$query = mysqli_query($connect, $sql);
$siswa = mysqli_fetch_assoc($query);

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
            <li><a href="index.php" class="active"><img src="../img/group.png">Data Siswa</a></li>
            <li><a href="../barang/index.php"><img src="../img/box.png">Data Barang</a></li>
        </ul>

        <div class="container">
            <div class="judul3">
                <h3>Edit Data Siswa</h3>
            </div>
    <div class="square2">
        <div class="input">
            <form action="edit.php" method="post">
            <input type="hidden" name="id_siswa" value="<?php echo $siswa['id_siswa']?>"/>
                <p><label>Nama Siswa </label>
                    <label class="colon">:</label>
                    <input type="text" name="nama" value="<?php echo $siswa['nama_siswa']?>" required="required"></label></p>
                </p>
                <p><label>Jenis Kelamin </label>
                    <label class="colon">:</label>
                    <input type="text" name="gender" value="<?php echo $siswa['jenis_kelamin']?>" required="required"></label></p>
                </p>
                <p><label>Alamat </label>
                    <label class="colon">:</label>
                    <input type="text" name="alamat" value="<?php echo $siswa['alamat']?>" required="required"></label></p>
                </p>
                <p><label>Tanggal Lahir </label>
                    <label class="colon">:</label>
                    <input type="text" name="tgl_lahir" value="<?php echo $siswa['tgl_lahir']?>" required="required"></label></p>
                </p>
                <p><label>Kelas </label>
                    <label class="colon">:</label>
                    <input type="text" name="kelas" value="<?php echo $siswa['kelas']?>" required="required"></label></p>
                </p>
                <input type="submit" name="edit" value="EDIT">
            </form>
        </div>
    </div>
    </div>
    </div>
</body>
</html>