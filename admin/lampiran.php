<style>

  table {
      border-collapse: collapse;
      width : 100% ;
  }

  table,th,td {
      text-align: left;
      padding: 8px;
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



<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>



    <!-- Main content -->
<section class = "content">
<div class="content">

<div class="col-md-14" style="padding:1px">
  <ol class="breadcrumb" style="margin:0;border-radius:0;">
    <li class="active"><a href="admin.php?content=dashboard">Dashboard</a> / Lampiran Siswa</li>
  </ol>
</div>
<br>

         
 <!--   <form class= "form-inline" action ="" method="GET">
                  <div class="form-group" style="float: right;" >
                    <input size="30px" type="text" name ="pencarian" class="form-control" placeholder="pencarian">
                      <button type="submit" class="btn btn-secondary" data-toggle="tooltip" title="pencarian"><i class="fa 
                        fa-search"></i></button>
                      <button type="submit" class="btn btn-warning" data-toggle="tooltip" title="refresh" value="remove"><i class="fa fa-refresh"></i></button>
                    </div>
                
         
            </form>

            <br>
 -->


 


      <table class="table table-hover">
        <thead>
          <tr>
            <th><font color="white">No</font></th>
            <th><font color="white">Nama Siswa </font></th>
            <th><font color="white">Keterangan</font></th>
        <!--     <th><font color="white">Lampiran 1</font></th> -->
            <th><font color="white">Tangal</font></th>
            <th colspan="4"><font color="white">
            <center>Action</center></font></th>
          </tr>
        </thead>        
        <tbody>

  
          <?php
          error_reporting(0);

            include '../config/koneksi.php';

            $query = mysqli_query($koneksi, "SELECT a.*, b.nama FROM lampiran a LEFT join siswa b ON a.id_siswa = b.id_siswa")or die(mysqli_error());
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
                        echo '<td>'.$data['keterangan'].'</td>';
                       
                        echo '<td>'.$data['date'].'</td>';
                          echo '<td>'.$data['file'].'</td>';
                      

                         echo '<td  width="10"><center><a data-toggle="tooltip" data-placement="left" title="Lihat Data Lengkap" href=admin.php?content=edit_lampiran&&id_lampiran='.$data['id_lampiran'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                        echo '<td  width="10"><a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/delete_lampiran.php?id_lampiran='.$data['id_lampiran'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                        echo '</tr>';
                    
                    
                        $no++;  
                      }
                    }
                    // die(var_dump($query));

                ?>


 
        </tbody>
      </table>
    </div>
  </section>
