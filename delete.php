<?php
include'../koneksi.php';

$id_sewa = $_GET['id_sewa'];
$query = "DELETE FROM sewa WHERE id_sewa = $id_sewa";
$result = mysqli_query($koneksi,$query);
$num= mysqli_affected_rows($koneksi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>HAPUS DATA</title>
    <link rel="stylesheet" href="../penyewaan/create.css">
</head>
<body>

<center>
    <h1>
        <?php
        if($num > 0){
            ?>
            <div id="hore"><p>Berhasil Hapus Data</p></div>
            <?php
        }else{
            ?>
            <div id="zonk"><p>Gagal Hapus Data</p></div>
            <?php
        }
        ?>
    </h1>
    <a href="read.php" class="button">Lihat Data</a>
</center>
    </body>
    </html>
