<?php
include 'connect.php';

//menyimpan ke dalam variabel
$id_keluarga = $_POST['id_keluarga'];
$alamat = $_POST['alamat'];
$jml_keluarga = $_POST['jml_keluarga'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$penghasilan = $_POST['penghasilan'];

//query SQL untuk insert data
$query = "UPDATE keluarga SET alamat='$alamat',jml_keluarga='$jml_keluarga',pekerjaan_ayah='$pekerjaan_ayah',pekerjaan_ibu='$pekerjaan_ibu',
        penghasilan='$penghasilan'
        WHERE id_keluarga='$id_keluarga'";
mysqli_query($koneksi, $query);

//mengalihkan ke halaman index2.php
header("location: warga.php");
?>