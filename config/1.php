<?php
     if($_SERVER['REQUEST_METHOD'] == "POST") {
            $pencarian = trim(mysqli_real_escape_string($koneksi, $_POST['pencarian']));
        echo "<div style=\"float:left;\">";
        $jml = mysqli_num_rows(mysqli_query($koneksi, $queryJml));
        echo "Data Hasil Pencarian: <b>$jml</b>";
        echo "</div>";
      } else { ?>
        <div style="float:right;">
          <?php
          $jml = mysqli_num_rows(mysqli_query($koneksi, $queryJml));
          echo "Jumlah Data: <b>$jml</b>";
          ?>
        </div>
        <div style="float:right;">
          <ul class="pagination pagination-sm" style="margin: 0">
            <?php
            $jml_hal = ceil($jml / $batas);
            for ($i=1; $i <= $jml_hal; $i++) {
              if ($i != $hal) {
                echo "<li><a href=\"admin.php?content=siswa&&hal=$i\">$i</a></li>";
              } else {
                echo "<li class=\"active\"><a>$i</a></li>";
              }
            }
            ?>


<td colspan=”2″ align=”center”><img src=”foto.jpg” width=30%></td>

$batas  = 6;
                       $hal    = @$_GET['hal'];
                       if (empty($hal)) {
                         $posisi = 0;
                         $hal    = 1;
                       } else {
                         $posisi = ($hal - 1) * $batas;
                       }
                 if($_SERVER['REQUEST_METHOD'] == "POST") {
            $pencarian = trim(mysqli_real_escape_string($koneksi, $_POST['pencarian']));
            if($pencarian !=''){
            $sql = "SELECT * FROM siswa WHERE st_siswa='1' AND nama LIKE '%$pencarian%' OR id_siswa LIKE '%$pencarian' OR NISN LIKE '%$pencarian' OR NIPD LIKE '%$pencarian' OR kelas LIKE '%$pencarian' OR agama LIKE '%$pencarian' ORDER BY id_siswa DESC";
                $query = $sql;
                $queryJml = $sql;
              } else {
                $query = "SELECT * FROM siswa WHERE st_siswa='1' ORDER BY id_siswa DESC LIMIT $posisi, $batas ";
                $queryJml = "SELECT * FROM siswa WHERE st_siswa='1' ORDER BY id_siswa DESC";
                $no = $posisi + 1;
              }
            } else {
              $query = "SELECT * FROM siswa WHERE st_siswa='1' ORDER BY id_siswa DESC LIMIT $posisi, $batas ";
              $queryJml = "SELECT * FROM siswa WHERE st_siswa='1' ORDER BY id_siswa DESC";
              $no = $posisi + 1;
            }




            <?php
     if($_SERVER['REQUEST_METHOD'] == "POST") {
            $pencarian = trim(mysqli_real_escape_string($koneksi, $_POST['pencarian']));
        echo "<div style=\"float:left;\">";
        $jml = mysqli_num_rows(mysqli_query($koneksi, $queryJml));
        echo "Data Hasil Pencarian: <b>$jml</b>";
        echo "</div>";
      } else { ?>
        <div style="float:right;">
          <?php
          $jml = mysqli_num_rows(mysqli_query($koneksi, $queryJml));
          echo "Jumlah Data: <b>$jml</b>";
          ?>
        </div>
        <div style="float:right;">
          <ul class="pagination pagination-sm" style="margin: 0">
            <?php
            $jml_hal = ceil($jml / $batas);
            for ($i=1; $i <= $jml_hal; $i++) {
              if ($i != $hal) {
                echo "<li><a href=\"admin.php?content=siswa&&hal=$i\">$i</a></li>";
              } else {
                echo "<li class=\"active\"><a>$i</a></li>";
              }
            }
            ?>




            <th><font size="2px">Kartu Keluarga</font></th>
                  <td>
                  <a data-toggle="tooltip" data-placement="right" title="Lihat Gambar" href="<?php echo $data['lampiran2'] ?>" target="_blank"><img width="70" height="50" src="<?php echo $data['lampiran2'] ?>" required></a>
                  </td>
                </tr>












<?php

    //error_reporting(0);

    include '../config/koneksi.php';

    $id_lampiran   = $_GET['id_lampiran'];

    $edit    = "SELECT * FROM lampiran WHERE id_lampiran = '$id_lampiran'";
    $hasil   = mysqli_query($koneksi, $edit)or die(mysqli_error());
    $data    = mysqli_fetch_array($hasil);

?>

<head>
  <title>Edit Data Siswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<section class = "content">

<div class="col-md-14" style="padding:1px">
  <ol class="breadcrumb" style="margin:0;border-radius:0;">
    <li class="active"><a href="admin.php?content=lampiran">Dashboard</a> / Lampiran Data Siswa</li>
  </ol>
</div>
<br>

<div class="col-md-12" style="min-height:500px">
    <hr> 
        <form class="form-horizontal" action="../config/edit_lampiran.php"  method="POST">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Edit Data Siswa</div>
            <div class="panel-body">

               <table class="table">
                    <tr>
                    <th><br><p align="center"><img src="../admin/logo.jpg" height="100"></p></th>
                    <td><br><p align="center">
                            <font size="6px"><b>SMP NEGERI 4 TAMBUN UTARA BEKASI</b></font><br>Jl. Raya Perumahan Taman Edelweiz Desa Satria Jaya, Kecamatan Tambun Utara, Kabupaten Bekasi, Jawa Barat</p></td>
                    </tr>
                </table>
              <table class="table table-bordered">
                <input type="hidden" name="id_siswa" value="<?php echo $id_siswa ?>">
                <tr>
        
                <tr>
                  <th><font size="2px">Nama </font></th>
                  <td width="600"><input class="form-control" name="nama" type="text" value="<?php echo $data['nama']; ?>" required></td>
                  
                </tr>
                <tr>
                  <th><font size="2px">Keterangan</font></th>
                  <td><input class="form-control" name="keterangan" type="keterangan" value="<?php echo $data['keterangan']; ?>" required></td>
                </tr>
                <tr>
                  <th><font size="2px">Akte Kelahiran</font></th>
                  <td>
                  <a data-toggle="tooltip" data-placement="right" title="Lihat Gambar" href="<?php echo $data['lampiran1'] ?>" target="_blank"><img width="70" height="50" src="<?php echo $data['lampiran1'] ?>" required></a>
                  </td>
                </tr>
                 <tr>
                  <th><font size="2px">Kartu Keluarga</font></th>
                  <td>
                  <a data-toggle="tooltip" data-placement="right" title="Lihat Gambar" href="<?php echo $data['lampiran2'] ?>" target="_blank"><img width="70" height="50" src="<?php echo $data['lampiran2'] ?>" required></a>
                  </td>
                </tr>
                <tr>
                  <th><font size="2px">Tanggal</font></th>
                  <td><input class="form-control" name="date" type="keterangan" value="<?php echo $data['date']; ?>" required></td>
                </tr>
               
              </table>
              <p align="right">
               
                <a href="admin.php?content=siswa"><button type="button" class="btn btn-secondary btn-fill pull-left">Kembali</button></a></p>
            
      </form>

</section>
<br>




<tr>
                 1.php