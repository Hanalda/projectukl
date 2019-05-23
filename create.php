<?php

include '../koneksi.php';
$id_mobil = $_POST['id_mobil'];
$id_sewa = $_POST['id_sewa'];
$id_karyawan = $_POST['id_karyawan'];
$id_pelanggan = $_POST['id_pelanggan'];
$tgl_sewa = $_POST['tgl_sewa'];
$tgl_kembali = $_POST['tgl_kembali'];
$total_bayar = $_POST['total_bayar'];

$result = mysqli_query($koneksi, "INSERT INTO sewa (id_mobil, id_sewa, id_karyawan, id_pelanggan,
tgl_sewa, tgl_kembali, total_bayar)
VALUES ('$id_mobil','$id_sewa', '$id_karyawan','$id_pelanggan','$tgl_sewa', '$tgl_kembali')");

$num = mysqli_affected_rows($koneksi);
?>

<link rel="stylesheet" href="../penyewaan/create.css">
<center>
    <h1>
        <?php
        if($num > 0){
            echo "Berhasil menambahkan data";
        }
        else{
            echo "Gagal Menambahkan data";
        }
        ?>
    </h1>
    </br>
    <a href='read.php' class="button">Lihat Data</a>
</center>