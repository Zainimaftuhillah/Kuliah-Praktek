<?php

	include '../config/koneksi.php';

	$id_siswa = $_GET ['id_siswa'];

	$hapus 	 = "DELETE FROM siswa WHERE id_siswa='$id_siswa'";
	$query	 = mysqli_query($koneksi, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../admin/admin.php?content=siswa'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }

	

?>