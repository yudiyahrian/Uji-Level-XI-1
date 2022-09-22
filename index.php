<?php
include 'koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uji Level XI</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

    <!-- Oxygen Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">

</head>
<body>

    <!-- Dashboard -->
    <div class="dashboard">
    <a href="#" class="logo"><img src="img/logo.png">SarPras</a>
    <hr>
        <ul>
            <li><a href="siswa/index.php"><img src="img/group.png">Data Siswa</a></li>
            <li><a href="barang/index.php"><img src="img/box.png">Data Barang</a></li>
        </ul>
    </div>

    <!-- main -->

    <div class="container">
        <div class="judul">
            <h3>Data Siswa</h3>
        </div>

        <div class="square">

        <div class="table1">
        <table>
            <tr>
                <th>Id Siswa</th>
                <th>Nama Siswa</th>
                <th>Jenis <br> Kelamin</th>
                <th>Alamat</th>
                <th>Tanggal <br> Lahir</th>
                <th>Kelas</th>
            </tr>

            <?php
            $sql = "SELECT * FROM data_siswa";
            $query = mysqli_query($connect,$sql);
            while($siswa = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$siswa['id_siswa']."</td>";
                echo "<td>".$siswa['nama_siswa']."</td>";
                echo "<td>".$siswa['jenis_kelamin']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['tgl_lahir']."</td>";
                echo "<td>".$siswa['kelas']."</td>";
            }
            ?>
        </table>
        </div>
        
        </div>
        
    </div>
    
</body>
</html>