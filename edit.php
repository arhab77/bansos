<?php
include 'connect.php';

//menyimpan ke dalam variabel
$id_penerima = $_POST['id_penerima'];
$id_keluarga = $_POST['id_keluarga'];
$id_bantuan = $_POST['id_bantuan'];
$tgl_terima = $_POST['tgl_terima'];

//query SQL untuk insert data
$query = "UPDATE penerima SET id_keluarga='$id_keluarga',
        id_bantuan='$id_bantuan',tgl_terima='$tgl_terima' WHERE id_penerima='$id_penerima'";
mysqli_query($koneksi, $query);

//mengalihkan ke halaman index2.php
header("location: penerima.php");
?>