<?php
session_start(); 
include '../koneksi.php';
include_once('../header.php');

$id_sewa = $_GET['id_sewa'];

$query = "SELECT * FROM sewa WHERE id_sewa = $id_sewa";

$result = mysqli_query($koneksi,$query);
$data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Update</title>
    <link rel="stylesheet" href="../penyewaan/form-create.css">
</head>
<body>
    <h1>Update Data Mobil</h1>
<section id="input-form">
    <form action="update.php" method="POST">
    <div class="form">

    <div class="form">
        <label>ID Sewa</label>
        <input type="int" name="id_sewa" value="<?php echo $data['id_sewa'];?>">
    </div>
    
    <div class="form">
        <label>ID Mobil</label>
        <input type="int" name="id_mobil" value="<?php echo $data['id_mobil'];?>">
    </div>

    <div class="form">
        <label>ID Karyawan</label>
        <input type="int" name="id_karyawan" value="<?php echo $data['id_karyawan'];?>">
    </div>

    <div class="form">
        <label>ID Pelanggan</label>
        <input type="int" name="id_pelanggan" value="<?php echo $data['id_pelanggan'];?>">
    </div>

    <div class="form">
        <label>Tanggal Sewa</label>
        <input type="date" name="tanggal_sewa" value="<?php echo $data['tgl_sewa'];?>">
    </div>

    <div class="form">
        <label>Tanggal Kembali</label>
        <input type="date" name="tanggal_kembali" value="<?php echo $data['tgl_kembali'];?>">
    </div>

    <div class="form">
        <label>Total Bayar</label>
        <input type="double" name="total_bayar" value="<?php echo $data['total_bayar'];?>">
    </div>

    <div class="form">
        <input class="button update" type="submit" name="btnSimpan" value="Save">
    </div>
    </div>
</form>
</section>
</body>
</html>