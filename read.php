<?php
session_start();
if(!(isset($_SESSION['karyawan']))){
    header("location: ../login/login-form.php");
}

include '../koneksi.php';
include_once('../header.php');

$result = mysqli_query($koneksi, "SELECT * FROM sewa ORDER BY id_sewa");
$num = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Penyewaan</title>
    <link rel="stylesheet" href="../penyewaan/read.css">
</head>
<body>
    </br>
<center>
    <h1>Detail Penyewaan</h1> 
    </br>
    </form>
        <table border=1>
            <tr>
                <th>ID Sewa</th>
                <th>ID Mobil</th>
                <th>ID Karyawan</th>
                <th>ID Pelanggan</th>
                <th>Tanggal Sewa</th>
                <th>Tanggal Kembali</th>
                <th>Total Bayar</th>
                <th>OPSI</th>
            </tr>
            <?php
            if($num > 0 ){
                while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $data['id_sewa'];?></td>
                        <td><?php echo $data['id_mobil'];?></td>
                        <td><?php echo $data['id_karyawan'];?></td>
                        <td><?php echo $data['id_pelanggan'];?></td>
                        <td><?php echo $data['tgl_sewa'];?></td>
                        <td><?php echo $data['tgl_kembali'];?></td>
                        <td><?php echo $data['total_bayar'];?></td>
                        <td>
                            <a class="button update" href="form-update.php?id_sewa=<?php echo
                            $data['id_sewa'];?>">Update</a>
                        
                            <a class="button delete" href="delete.php?id_sewa=<?php echo $data['id_sewa'];?>"
                            onclick="return confirm('Anda Yakin Ingin Menghapus Data?')">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
            }
            else{

            }
            ?>
        </table>
        </br>
        </br>
        <a class="button tambah" href="form-create.php">[+]Tambah</a>   
</center>
</body>
</html>