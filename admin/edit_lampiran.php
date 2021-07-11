<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_lampiran      = $_GET['id_lampiran'];
    // $id_id_siswa      = $_GET['id_siswa'];
    // $edit    = "SELECT * FROM lampiran WHERE id_lampiran = '$id_lampiran'";
    $edit    = "SELECT * FROM lampiran a 
INNER JOIN siswa b ON  a.id_siswa=b.id_siswa
WHERE a.id_lampiran=$id_lampiran";
    $hasil   = mysqli_query($koneksi, $edit)or die(mysqli_error());
    $data    = mysqli_fetch_array($hasil);

?>

<head>
  <title>Lampiran</title>
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
        <form class="form-horizontal" action="../config/lampiran.php"  method="POST">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Lampiran</div>
            <div class="panel-body">

               <table class="table">
                    <tr>
                    <th><br><p align="center"><img src="../admin/logo.jpg" height="100"></p></th>
                    <td><br><p align="center">
                            <font size="6px"><b>SMP NEGERI 4 TAMBUN UTARA BEKASI</b></font><br>Jl. Raya Perumahan Taman Edelweiz Desa Satria Jaya, Kecamatan Tambun Utara, Kabupaten Bekasi, Jawa Barat</p></td>
                    </tr>
                </table>
              <table class="table table-bordered">

                <input type="hidden" name="id_siswa" value="<?php echo $id_siswa;?>">
                <tr>
        
                 <tr>
                  <th><font size="2px">Nama</font></th>
                  <td width="800"><input class="form-control" name="nama" type="text" value="<?php echo $data['nama'];?>" required></td>
                </tr>
                <tr>
                  <th><font size="2px">Keterangan</font></th>
                  <td><input class="form-control" name="keterangan" type="text" value="<?php echo $data['keterangan']; ?>" required></td>
                </tr>
              
                <br>
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
