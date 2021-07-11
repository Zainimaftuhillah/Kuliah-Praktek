
<?php

error_reporting(0);

include 'koneksi.php';

$id_siswa   = $_POST["id_siswa"];
$date		= date('Y-m-d');
$keterangan	= $_POST["keterangan"];


$insert			= "INSERT INTO lampiran VALUES ('', '$id_siswa' ,'$date','$keterangan')";


$simpan			= mysqli_query($koneksi, $insert)or die(mysqli_error($koneksi));

echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL= ../walimurid/walimurid.php">';  


?>