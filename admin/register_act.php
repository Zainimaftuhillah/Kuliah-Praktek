<?php 

include '../config/koneksi.php';

$id_siswa = $_POST['id_siswa'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];

$query = mysqli_query($koneksi, "INSERT INTO user VALUES (NULL,'$id_siswa','$username','$password','$nama','walimurid')");

echo "<br><br><br><strong><center><i>Berhasil Daftar";
echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL= index.php">';  