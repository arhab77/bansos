<?php
include 'connect.php';

//menyimpan data nim kedalam variabel
$id_penerima = $_GET['id_penerima'];

//query SQL untuk insert data
$query = "DELETE FROM penerima WHERE id_penerima='$id_penerima'";
mysqli_query($koneksi,$query);

//mengalihkan ke halaman index2.php
header("location: penerima.php");
?>