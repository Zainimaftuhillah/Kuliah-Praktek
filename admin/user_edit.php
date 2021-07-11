<div class="col-md-12" style="min-height:500px">
    <hr> 
        <form class="form-horizontal" action="../config/edit_user.php"  method="POST">
          <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Edit Data User</div>
            <div class="panel-body">
              <table class="table table-bordered">
                <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
        
                <tr>
                  <th><font size="2px">USERNAME </font></th>
                  <td><input class="form-control" name="username" type="text" value="<?php echo $data['username']; ?>" required></td>
                </tr>
                <tr>
                  <th><font size="2px">PASSWORD</font></th>
                  <td><input class="form-control" name="password" type="text" value="<?php echo $data['password']; ?>" required></td>
                </tr>
                <tr>
                  <th><font size="2px">NAMA LENGKAP</font></th>
                  <td><input class="form-control" name="namalengkap" type="text" value="<?php echo $data['namalengkap']; ?>" required></td>
                </tr>
               
                <tr>
                  <th><font size="2px">NAMA SISWA</font></th>
                  <td><select id="nama" class="form-control" type="id_siswa" aria-describedby="basic-addon1" required></td>

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
                </tr>
                <br>



              </table>
              <p align="right">
                <button type="submit" class="btn btn-primary btn-fill pull-right">Simpan</button>
                <a href="admin.php?content=user"><button type="button" class="btn btn-secondary btn-fill pull-right">Kembali</button></a></p>
            
      </form>

</section>
<br>