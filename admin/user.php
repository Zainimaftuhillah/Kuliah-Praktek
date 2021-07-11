<style>S

  table {
      border-collapse: collapse;
      width: 100%;
  }

  th, td {
      text-align: left;
      padding: 8px;
  }


  th {
      background-color: #A9A9A9;
      color: white; 
  }

  td {
    font-size: 14px;
  }

</style> 



    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>


    

<div class="col-md-12" style="padding:0px">
  <ol class="breadcrumb" style="margin:0;border-radius:0;">
    <li class="active"><a href="admin.php?content=dashboard">Dashboard</a> / Manajemen User</li>
  </ol>
</div>

 
    <hr>
    <div class="content" align="right">

    <a href="admin.php?content=tambah_admin">
    <button type="button" class="btn btn-secondary"><i class="fa fa-plus-circle fa-fw"></i>Admin</button></a>
    <a href="admin.php?content=tambah_walimurid">
    <button type="button" class="btn btn-secondary"><i class="fa fa-plus-circle fa-fw"></i>waliMurid</button></a>
    <br>
    <br>

    <tr>
                  <td><br><p align="center">
                          <font size="6px"><b>TABEL ADMIN</p></td>
                  </tr>
      <table class="table table-hover">
        <thead>
          <tr>
            <th><font color="white">No</font></th>
            <th><font color="white">Username</font></th>
            <th><font color="white">Password</font></th>
            <th><font color="white">Nama Lengkap</font></th>
            <th><font color="white">Level</font></th>
           	<th colspan="2"><font color="white"><center>Action</center></font></th>
          </tr>
        </thead>
        <tbody>
          <?php
          error_reporting(0);

            include '../config/koneksi.php';

            $query = mysqli_query($koneksi, "SELECT distinct a.*, b.* FROM user a LEFT JOIN siswa b ON a.id_siswa = b.id_siswa WHERE a.level='admin'")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="4" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['username'].'</td>';
                        echo '<td>'.$data['password'].'</td>';
                        echo '<td>'.$data['namalengkap'].'</td>';
                        echo '<td>'.$data['level'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=admin.php?content=edit_admin&&id_user='.$data['id_user'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                      echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/delete_admin.php?id_user='.$data['id_user'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                        echo '</tr>';
                        $no++;  
                      }
                    }
                    // die(var_dump($query));

                ?>
                    
        </tbody>
      </table>
    </div> <br> <br>
<tr>
                  <td><br><p align="center">
                          <font size="6px"><b>TABEL WALIMURID</p></td>
                  </tr>
      <table class="table table-hover">
        <thead>
          <tr>
            <th><font color="white">No</font></th>
            <th><font color="white">Username</font></th>
            <th><font color="white">Password</font></th>
            <th><font color="white">Nama Lengkap</font></th>
            <th><font color="white">Siswa</font></th>
            <th><font color="white">Level</font></th>
            <th colspan="2"><font color="white"><center>Action</center></font></th>
          </tr>
        </thead>
        <tbody>
          <?php
          error_reporting(0);

            include '../config/koneksi.php';

            $query = mysqli_query($koneksi, "SELECT distinct a.*, b.* FROM user a LEFT JOIN siswa b ON a.id_siswa = b.id_siswa WHERE a.level='walimurid' ")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="4" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['username'].'</td>';
                        echo '<td>'.$data['password'].'</td>';
                        echo '<td>'.$data['namalengkap'].'</td>';
                        echo '<td>'.$data['nama'].'</td>';
                        echo '<td>'.$data['level'].'</td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=admin.php?content=edit_user&&id_user='.$data['id_user'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                      echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/delete_user.php?id_user='.$data['id_user'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                        echo '</tr>';
                        $no++;  
                      }
                    }
                    // die(var_dump($query));

                ?>
                    
        </tbody>
      </table>
  
<!-- Modal -->
