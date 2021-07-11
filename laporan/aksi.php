<?php
session_start();
if(empty($_SESSION['username'])){
	header('Location: index.php');
}else{
	include('../../config/koneksi.php');
	$module = $_GET['module'];
	$act 	= $_GET['act'];

	if($module == 'laporan' && $act == 'per_tanggal'){

		header('Location: ../../media.php?module=laporan&act=per_tanggal&tgl1='.$_POST['tgl1'].'&tgl2='.$_POST['tgl2']);
		
	}else if($module == 'laporan' && $act == 'cetak'){

		header('Location: cetak.php?module=laporan&tgl1='.$_POST['tgl1'].'&tgl2='.$_POST['tgl2']);
		
	}else if($module == 'inquiry' && $act == 'delete'){
		$query = mysqli_query($conn, "DELETE FROM inquiry WHERE id = '".$_GET['id']."'");
		header('Location: ../../media.php?module=inquiry');
	}
}