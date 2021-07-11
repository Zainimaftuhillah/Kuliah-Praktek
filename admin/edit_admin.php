<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_user = $_GET['id_user'];

    $edit    = "SELECT * FROM user WHERE id_user = '$id_user'";
    $hasil   = mysqli_query($koneksi, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

?>


<!DOCTYPE html>
<html>
<style>


div {
  border-radius: 0px;
  background-color: ;
  padding: 1px;
}
</style>

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<!-- <section class = "content"> -->

<div class="col-md-14" style="padding:1px">
  <ol class="breadcrumb" style="margin:0;border-radius:0;">
    <li class="active"><a href="admin.php?content=user">Dashboard</a> / Edit Data Admin</li>
  </ol>
</div>
<br>

<div class="col-md-12" style="min-height:500px">
    <hr> 
        <form class="form-horizontal" action="../config/edit_admin.php"  method="POST">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Edit Data User</div>
            <div class="panel-body">

               <table class="table">
             
 <tr>
                  <td><br><p align="center">
                          <font size="6px"><b>FORM EDIT ADMIN</p></td>
                  </tr>
  </table>

                            <div class="content">
                             <!--    <form action="../config/edit_user.php" method="POST" > -->
                                    <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
                                     
                                    <div class="card-body">
                              <div class="row">
                                <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="username" name="username" value ="<?php echo $data['username']; ?>"required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input required type="text" class="form-control" placeholder="password" name="password" value ="<?php echo $data['password']; ?>" required>   
                                            </div>
                                        </div>
                                       
                                        <br>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                                <input required type="text" class="form-control" placeholder="nama lengkap" name="namalengkap" value ="<?php echo $data['namalengkap']; ?>" required>   
                                            </div>
                                        </div>
                                    </div>
                                
                                        
                                    <button type="submit" class="btn btn-secondary btn-fill ">Simpan</button>
                                    <div class="clearfix"></div>
                                    <br>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
         
          </div>
        
            