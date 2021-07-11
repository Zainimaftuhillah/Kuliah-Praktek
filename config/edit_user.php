<?php 
	error_reporting(0); 
	
	include '../config/koneksi.php';


	$id_user		= $_POST["id_user"];
	$id_siswa		= $_POST["id_siswa"];
	$username		= $_POST["username"];
	$password		= $_POST["password"];
	$namalengkap    = $_POST["namalengkap"];

	
   $update     	= "UPDATE user SET id_siswa='$id_siswa', username='$username', password='$password', namalengkap='$namalengkap', level='walimurid' WHERE id_user='$id_user'";

	$updateuser	    = mysqli_query($koneksi, $update)or die(mysqli_error());

	// die(var_dump($update));

if ($update)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil di Ubah";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?content=user">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Data Tidak Berhasil Di Ubah!\");
    				history.back(-1);
    			</script>";
    	}

?> 
