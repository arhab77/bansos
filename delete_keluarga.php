<?php
include 'connect.php';

//menyimpan data nim kedalam variabel
$id_keluarga = $_GET['id_keluarga'];

//query SQL untuk insert data
$query = "DELETE FROM keluarga WHERE id_keluarga='$id_keluarga'";
mysqli_query($koneksi,$query);

//mengalihkan ke halaman index2.php
header("location: warga.php");
?>