<?php
session_start();
session_destroy(); //untuk menghancurkan semua inisialisasi data yang telah dibuat di session_start
header("location:../login/login-form.php");
?>