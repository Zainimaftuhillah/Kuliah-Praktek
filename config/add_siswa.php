<?php

	// error_reporting(0);
	
	include '../config/koneksi.php';

	$nama		   	= $_POST["nama"];
	$NISN			= $_POST["NISN"];
	$NIPD			= $_POST["NIPD"];
	$kelas			= $_POST["kelas"];
	$tempat		   	= $_POST["tempat"];
	$tanggal	   	= $_POST["tanggal"];
	$jk_siswa 		= $_POST["jk_siswa"];
	$ayah			= $_POST["ayah"];
	$ibu			= $_POST["ibu"];
	$agama		   	= $_POST["agama"];
	$alamat		  	= $_POST["alamat"];
	$sekolah_asal   = $_POST["sekolah_asal"];
	$th_masuk	  	= $_POST["th_masuk"];
	$st_siswa		= $_POST["st_siswa"];
	$tanggal1 = date("Y-m-d");

	$insert			= "INSERT INTO siswa VALUES ('','$nama','$NISN','$NIPD', '$kelas', '$tempat','$tanggal','$jk_siswa','$ayah','$ibu','$agama','$alamat','$sekolah_asal', '$th_masuk', '$st_siswa','','')";

	$simpan			= mysqli_query($koneksi, $insert)or die(mysqli_error($koneksi));

	$last_id = mysqli_insert_id($koneksi);
	$insert1			= "INSERT INTO spp VALUES ('','$last_id',NULL,'$tanggal1')";
	$simpan1			= mysqli_query($koneksi, $insert1)or die(mysqli_error($koneksi));

	echo "<br><br><br><strong><center><i>Data berhasil ditambah!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL= ../admin/admin.php?content=siswa">';  

?>