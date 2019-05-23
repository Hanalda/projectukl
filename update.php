<?php
include '../koneksi.php';//menghubungakan k koneksi
//menangkap data yang dikirim dari inputan dan disimpan pada variabel tersebut
$id_mobil = $_POST['id_mobil'];
$id_sewa = $_POST['id_sewa'];
$id_karyawan = $_POST['id_karyawan'];
$id_pelanggan = $_POST['id_pelanggan'];
$tgl_sewa = $_POST['$tgl_sewa'];
$tgl_kembali = $_POST['tgl_kembali'];
$total_bayar = $_POST['total_bayar'];
//menyeleksi data yang sesuai di database
$result= mysqli_query($koneksi,"UPDATE sewa SET 
        id_sewa='$id_sewa',id_mobil='$id_mobil',
        id_karyawan='$id_karyawan', id_pelanggan='$id_pelanggan',
        tgl_sewa='$tgl_sewa', tgl_kembali='$tgl_kembali',
        total_bayar = '$total_bayar' WHERE id_sewa=$id_sewa");
//mengambil jumlah dataa dari query
$num = mysqli_affected_rows($koneksi);
?>
<!-- tampilan /proses -->
<link rel="stylesheet" href="../penyewaan/create.css">
<center>
    <h1>
        <?php
        if($num > 0){
            echo "Berhasil Update Data";
        }else{
            echo "Gagal Update Data";
        }
        ?>
        </br>
    </h1>
    <a href="read.php" class="button">Lihat Data</a>
</center>   
