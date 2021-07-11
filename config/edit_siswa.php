<?php

	error_reporting(0);
	
	include 'koneksi.php';


	$id_siswa		= $_POST["id_siswa"];
	$nama		   	= $_POST["nama"];
	$NISN  			= $_POST["NISN"];
	$NIPD  			= $_POST["NIPD"];
	$kelas  		= $_POST["kelas"];
	$tempat		    = $_POST["tempat"];
	$tanggal		= $_POST["tanggal"];
	$jk_siswa		= $_POST["jk_siswa"];
	$ayah			= $_POST["ayah"];
	$ibu			= $_POST["ibu"];
	$agama			= $_POST["agama"];
	$alamat	  		= $_POST["alamat"];
	$sekolah_asal	= $_POST["sekolah_asal"];
	$th_masuk	  	= $_POST["th_masuk"];
	$st_siswa		= $_POST["st_siswa"];
	$SPP			= str_replace([",",".","Rp"," "],"",$_POST["SPP"]);

	$tanggal1 = date("Y-m-d");

	// var_dump($update);

	///$update="UPDATE siswa SET nama='$nama', nisn='$nisn', alamat='$alamat' where id='$id'";

	$update     	= "UPDATE siswa SET  nama='$nama', NISN='$NISN', NIPD='$NIPD', kelas='$kelas', tempat='$tempat',tanggal='$tanggal', jk_siswa='$jk_siswa', ayah='$ayah', ibu='$ibu', agama='$agama', alamat='$alamat', sekolah_asal='$sekolah_asal', 
		th_masuk='$th_masuk', st_siswa='$st_siswa', SPP='$SPP', tanggal_spp = '$tanggal1' WHERE id_siswa='$id_siswa'";

	$updateuser	    = mysqli_query($koneksi, $update);

	$update1 = "UPDATE spp SET jumlah_spp = '$SPP', tanggal_spp = '$tanggal1' WHERE id_user = '$id_siswa'";
	$updateuser1	    = mysqli_query($koneksi, $update1);


	 // die(var_dump($id_siswa));

	if ($update)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil di Ubah";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?content=siswa">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Data Tidak Berhasil Di Ubah!\");
    				history.back(-1);
    			</script>";
    	}

?>