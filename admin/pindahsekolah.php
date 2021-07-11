<style>

  table {
      border-collapse: collapse;
      width : 100% ;
  }

  table,th,td {
      text-align: left;
      padding: 8x;
  }
 
 tr : nth-child (even){background-color : #bbdfed ; }

  th {
      background-color: #A9A9A9;
      color: white; 
  }

  td {
    font-size: 12px;
  }

</style> 
  
<!DOCTYPE html>
<html>
<head>
  <title>Print Data Siswa Pindah Sekolah </title>
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

  $edit    = "SELECT * FROM siswa WHERE id_siswa = '$id_siswa' AND st_siswa='PINDAH SEKOLAH'";;
  $hasil   = mysqli_query($koneksi, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>
           <body onload="window.print()">
            <form class="form-horizontal" action="" method="POST">
         <!--    <div class="panel-group">
            <div class="panel panel-primary"> -->
              <div class="panel-body">
                <table class="table">
                  <tr>
                  <th><br><p align="center"><img src="../admin/logo.jpg" height="100"></p></th>
                  <td><br><p align="center">
                          <font size="6px"><b>SMP CAWANG BARU, JAKARTA TIMUR</b></font><br>Jl. Cawang Baru No.543, RT.7/RW.10, Cipinang Cempedak, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13340</p></td>
                  </tr>
                </table>
            
               <table class="table table-hover">
        <thead>
          <tr>
            <th><font color="white">No</font></th>
            <th><font color="white">Nama </font></th>
            <th><font color="white">NISN</font></th>
            <th><font color="white">NIPD</font></th>
            <th><font color="white">kelas</font></th>
            <th><font color="white">Tempat Lahir</font></th>
            <th><font color="white">Tanggal Lahir</font></th>
            <th><font color="white">Jenis Kelamin</font></th>
            <th><font color="white">Ayah</font></th>
            <th><font color="white">Ibu</font></th>
            <th><font color="white">Agama</font></th>
            <th><font color="white">Alamat</font></th>
            <th><font color="white">Sekolah Asal</font></th>
            <th><font color="white">Tahun Masuk</font></th>
            <th><font color="white">Status Siswa</font></th>
            
    
        
        <tbody>

  
          <?php
          error_reporting(0);

            include '../config/koneksi.php';

                     
            $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE st_siswa='PINDAH SEKOLAH'")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="4" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['nama'].'</td>';
                        echo '<td>'.$data['NISN'].'</td>';
                        echo '<td>'.$data['NIPD'].'</td>';
                        echo '<td>'.$data['kelas'].'</td>';
                        echo '<td>'.$data['tempat'].'</td>';
                        echo '<td>'.$data['tanggal'].'</td>';
                        echo '<td>'.$data['jk_siswa'].'</td>';
                        echo '<td>'.$data['ayah'].'</td>';
                        echo '<td>'.$data['ibu'].'</td>';
                        echo '<td>'.$data['agama'].'</td>';
                        echo '<td>'.$data['alamat'].'</td>';
                        echo '<td>'.$data['sekolah_asal'].'</td>';
                        echo '<td>'.$data['th_masuk'].'</td>';
                        echo '<td>'.$data['st_siswa'].'</td>';

                      
                        $no++;  
                      }
                    }
                    // die(var_dump($query));

                ?>


 
        </tbody>
      </table>

</body>
</html>

            