  
<!DOCTYPE html>
<html>
<head>
  <title>Print Data Siswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="layout.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="../bootstrap/jquery-3.2.1.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>

<?php

  error_reporting(0);

  include '../config/koneksi.php';

  $id_siswa = $_GET['id_siswa'];

  $edit    = "SELECT * FROM siswa WHERE id_siswa = '$id_siswa'";
  $hasil   = mysqli_query($koneksi, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>
           <body onload="window.print()">
            <form class="form-horizontal" action="" method="POST">
           <!--  <input type="hidden" name="id_siswa" value="<?php echo $id_siswa?>"> -->
            <div class="panel-group">
            <div class="panel panel-primary">
              <div class="panel-body">
                <table class="table">
                  <tr>
                  <th><br><p align="center"><img src="../admin/logoo.png" height="100"></p></th>
                  <td><br><p align="center">
                          <font size="6px"><b>LAPORAN SPP SMP CAWANG BARU</b></font><br>Jl. Raya Perumahan Taman Edelweiz Desa Satria Jaya<br>Kecamatan Tambun Utara, Kabupaten Bekasi, Jawa Barat</p></td>
                  </tr>
                </table>
            
            <table class="table table-bordered">  
              <tr>
                <input type="hidden" name="id_siswa" value="<?php echo $id_siswa?>">

                <th><font size="3px">Nama </font></th>
                <td width="500"><i><font size="3px"><?php echo $data['nama'];?></font></i></td>
              </tr>
              <tr>
               <!--  <th><font size="3px">NISN</font></th>
                <td width="500"><i><font size="3px"><?php echo $data['NISN'];?></font></i></td>
              </tr>
              <tr>
                <th><font size="3px">NIPD</font></th>
                <td width="500"><i><font size="3px"><?php echo $data['NIPD'];?></font></i></td>
              </tr>
               -->
              <tr>
                <th><font size="3px">Kelas</font></th>
                <td width="500"><i><font size="3px"><?php echo $data['kelas'];?></font></i></td>
              </tr>
                 <tr>
                <th><font size="3px">SPP</font></th>
                <td width="500"><i><font size="3px"><?php echo $data['SPP'];?></font></i></td>
              </tr>
      <!--         <tr>
                <th><font size="3px">Tempat Lahir</font></th>
                <td width="500"><i><font size="3px"><?php echo $data['tempat'];?></font></i></td>
              </tr>
              <tr>
                <th><font size="3px">Tanggal Lahir </font></th>
                <td width="500"><i><font size="3px"><?php echo $data['tanggal'];?></font></i></td>
              </tr>
              <tr>
                <th><font size="3px">Jenis Kelamin</font></th>
                <td width="500"><i><font size="3px"><?php echo $data['jk_siswa'];?></font></i></td>
              </tr>
               <tr>
                <th><font size="3px">Ayah</font></th>
                <td width="500"><i><font size="3px"><?php echo $data['ayah'];?></font></i></td>
              </tr>
               <tr>
                <th><font size="3px">Ibu</font></th>
                <td width="500"><i><font size="3px"><?php echo $data['ibu'];?></font></i></td>
              </tr>
               <tr>
                <th><font size="3px">Agama</font></th>
                <td width="500"><i><font size="3px"><?php echo $data['agama'];?></font></i></td>
              </tr>
               <tr>
                <th><font size="3px">Alamat</font></th>
                <td width="500"><i><font size="3px"><?php echo $data['alamat'];?></font></i></td>
              </tr>
               <tr>
                <th><font size="3px">Sekolah Asal </font></th>
                <td width="500"><i><font size="3px"><?php echo $data['sekolah_asal'];?></font></i></td>
              </tr>
              <tr>
                <th><font size="3px">Tahun Masuk</font></th>
                <td width="500"><i><font size="3px"><?php echo $data['th_masuk'];?></font></i></td>
              </tr>
              <tr>
                <th><font size="3px">Status Siswa</font></th>
                <td width="500"><i><font size="3px"><?php echo $data['st_siswa'];?></font></i></td>
              </tr> -->

                <table class="table">
                  <tr>
                <!--   <th><br><p align="center"><img src="../admin/logo.jpg" height="100"></p></th> -->
                  <td><br><p align="right">
                          <font size="6px"><!-- <b>SMP NEGERI 4 TAMBUN UTARA BEKASI</b> --></font><br><b>Penanggung Jawab<br></b>
                          <br> Mahendra Aditya<br>
                          <br><br></p></td>
                  </tr>
                </table>

                                    
          </table>
 
        </div>
      </div>
    </div>
  </form>
</body>
</html>

            