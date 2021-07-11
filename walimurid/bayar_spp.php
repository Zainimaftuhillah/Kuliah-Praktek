<?php
	include '../config/koneksi.php';
    $jumlah_spp = str_replace([",",".","Rp"," "],"",$_POST['jumlah_spp']);
    $id_user = $_POST['id_user'];
    $tanggal = date("Y-m-d");

    mysqli_query($koneksi, "UPDATE spp SET jumlah_spp = '$jumlah_spp', tanggal_spp = '$tanggal' WHERE id_user = '$id_user'");
    mysqli_query($koneksi, "UPDATE siswa SET SPP = '$jumlah_spp', tanggal_spp = '$tanggal' WHERE id_siswa = '$id_user'");

    echo "<br><br><br><strong><center><i>SPP berhasil dibayar!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL= ../admin/admin.php?content=siswa">'
    ?>