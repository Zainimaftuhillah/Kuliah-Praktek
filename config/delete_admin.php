<?php

	include '../config/koneksi.php';

	$id_user = $_GET ['id_user'];

	$hapus 	 = "DELETE FROM user WHERE id_user='$id_user'";
	$query	 = mysqli_query($koneksi, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../admin/admin.php?content=user'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }

	

?>