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
       <div class="content">
            <div class="container-fluid">
                
                    <div class="col-md-16">
                            <div class="header">
                               <center><h3 class="title">DATA WALIMURID</center></h3>
                            </div>

                            <div class="content">
                                <form action="../config/add_walimurid.php" method="POST" >
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Siswa</label>
                                                <select class="form-control" name="id_siswa" aria-describedby="basic-addon1" required>
                                               <?php
                                                include '../config/koneksi.php';

                                               $siswa = "SELECT * FROM siswa";
                                               $querysis = mysqli_query($koneksi,$siswa);
                                               while ($data = mysqli_fetch_array($querysis)) { ?>
                                            
                                                    <option value="<?php echo $data['id_siswa'] ?>"> <?php echo $data['nama'] ?>
                                                
                                                  </option>
                                                <?php
                                               }
                                               ?>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                                <input required type="text" class="form-control" placeholder="Nama Lengkap" name="namalengkap" required>   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input required type="text" class="form-control" placeholder="Password" name="password" required>   
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="Username" name="username" required>
                                            </div>
                                        </div>
                                    </div>

                                        
                                    <button type="submit" class="btn btn-secondary btn-fill ">Tambah Data</button>
                                    <div class="clearfix"></div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            