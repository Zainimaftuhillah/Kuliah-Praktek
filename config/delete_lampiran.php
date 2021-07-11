<?php

	include '../config/koneksi.php';

	$id_lampiran = $_GET ['id_lampiran'];

	$hapus 	 = "DELETE FROM lampiran WHERE id_lampiran='$id_lampiran'";
	$query	 = mysqli_query($koneksi, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../admin/admin.php?content=lampiran'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }

	

?>