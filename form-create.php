<?php
include_once('../header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Create</title>
    <link rel="stylesheet" href="../penyewaan/form-create.css">
</head>
<body>
    <h1>Form Penyewaan</h1>
    </div>
    <section id="input-form">
        <form action="create.php" method="post">
            <div class="form">
            <div class="form">
                <label>ID Sewa</label>
                <input type="int" name="id_sewa" placeholder="Masukkan ID Sewa">
            </div>

            <div class="form">
                <label>ID Mobil</label>
                <input type="int" name="id_mobil" placeholder="Masukkan ID Mobil">
            </div>

            <div class="form">
                <label>ID Karyawan</label>
                <input type="int" name="id_karyawan" placeholder="Masukkan ID Karyawan">
            </div>
            
            <div class="form">
                <label>ID Pelanggan</label>
                <input type="int" name="id_pelanggan" placeholder="Masukkan ID Pelanggan">
            </div>

            <div class="form">
                <label>Tanggal Sewa</label>
                <input type="date" name="tgl_sewa" placeholder="Masukkan Tanggal Sewa"> 
            </div>

            <div class="form">
                <label>Tanggal Kembali</label>
                <input type="date" name="tgl_kembali" placeholder="Masukkan Tanggal kembali">
            </div>

            <div class="form">
                <label>Total Bayar</label>
                <input type="double" name="total_bayar" placeholder="Masukkan Total Pembayaran">
            </div>            

            <div class="form">
            <input class="button tambah" type="submit" name="btnSimpan" value="Save">
            </div>            
            </div>
        </form>
    </section>
</body>
</html>