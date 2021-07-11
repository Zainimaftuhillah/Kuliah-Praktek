
<?php

	error_reporting(0);
	
	include '../config/koneksi.php';

	$username		   		= $_POST["username"];
	$password				= $_POST["password"];
	$namalengkap			= $_POST["namalengkap"];
	$id_siswa				= $_POST["id_siswa"];
	$level					= "walimurid";
	
	$insert			= "INSERT INTO user VALUES ('','$id_siswa','$username','$password','$namalengkap', '$level')";
	

	$simpan			= mysqli_query($koneksi, $insert)or die(mysqli_error($koneksi));

	echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL= ../admin/admin.php?content=user">';  

?>