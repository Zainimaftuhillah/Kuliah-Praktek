<!DOCTYPE html>
<html>
<style>


div {
  border-radius: 0px;
  background-color: ;
  padding: 1px;
}
</style>



<section class = "content">

<div class="col-md-14" style="padding:1px">
  <ol class="breadcrumb" style="margin:0;border-radius:0;">
    <li class="active"><a href="admin.php?content=siswa">Dashboard</a> / Data Siswa</li>
  </ol>
</div>
<br>
 <div class="content">
                <div class="container-fluid">
         <div class="row">
             <div class="card">
                        <div class="card-header">
                           <font size="6px"><b>INPUT DATA SISWA</b></font></p></td>
                        </div>

            <div class="panel-group">
            
              <div class="panel-body">
                <table class="table">
                  <tr>
                  <th><br><p align="center"><img src="../admin/logoo.png" height="100"></p></th>
                  <td><br><p align="center">
                          <font size="6px"><b>SMP CAWANG BARU</b></font><br>Jl. Cawang Baru No.543, RT.7/RW.10, Cipinang Cempedak, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13340</p></td>
                  </tr>
                </table>

                           <div class="card-body">
                            <div class="row">
                                <form action="../config/add_siswa.php" method="POST" >
                                    
                                      <div class="col-md-5">
                                        <div class="form-group">
                                           
                                                <label>Nama Siswa</label>
                                                <input type="text" class="form-control" placeholder="Nama Siswa" name="nama" required>
                                            </div>
                                        </div>
                                    <div class ="card-body">
                                       <div class="row">    
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                                <label for="exampleInputEmail1">NISN</label>
                                                <input required type="number" class="form-control" placeholder="NISN" name="NISN" required> 
                                            </div>
                                        </div>

                                             <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">NIPD</label>
                                                <input required type="number" class="form-control" placeholder="NIPD" name="NIPD" required> 
                                            </div>
                                        </div>
                                        <div class ="card-body">
                                            <div class ="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Kelas</label>
                                                <select class="form-control" name="kelas" required>
                                        <option>VII</option>
                                        <option>VIII</option>
                                        <option>IX</option>
                                        </select> 
                                        </div>  
                                            </div>
                                 

                                             <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tempat Lahir</label>
                                                <input required type="text" class="form-control" placeholder="Tempat Lahir" name="tempat"required>   
                                            </div>
                                        </div>
                                         <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tanggal Lahir</label>
                                                <input required type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal" required>   
                                            </div>
                                        </div>

                                  <div class ="card-body">
                                            <div class ="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Jenis Kelamin</label>
                                                <select class="form-control" name="jk_siswa" required>
                                        <option>Perempuan</option>
                                        <option>Laki-laki</option>
                                        </select> 
                                        </div>  
                                            </div>
                                            
                                  
                                    <div class="col-lg-4">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Ayah</label>
                                                <input required type="text" class="form-control" placeholder="Nama Ayah" name="ayah" required>   
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Ibu</label>
                                                <input required type="text" class="form-control" placeholder="Nama Ibu" name="ibu" required>   
                                            </div>
                                        </div>
                           

                                   <div class ="card-body">
                                            <div class ="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Agama</label>
                                                <select class="form-control" name="agama" required>
                                        <option>ISLAM</option>
                                        <option>PROTESTAN</option>
                                        <option>BUDHA</option>
                                        <option>HINDU</option>
                                        <option>KATHOLIK</option>
                                        </select> 
                                        </div>  
                                            </div>
                                       <div class="col-lg-4">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Alamat</label>
                                                <input required type="text" class="form-control" placeholder="Alamat" name="alamat" required>   
                                            </div>
                                        </div>
                                   
                                  <div class="col-lg-4">

                                            <div class="form-group">
                                                <label>Sekolah Asal</label>
                                                <input type="text" class="form-control" placeholder="Sekolah Asal" name="sekolah_asal" required>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                        <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Tahun Masuk</label>
                                                <input type="number" class="form-control" placeholder="Tahun Masuk" name="th_masuk"required>
                                                <!--  <input type="hidden" class="form-control" name="st_siswa" value="1" > -->
                                                 </div>
                                        </div>
                                    </div>
                                  
                                
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Status Siswa</label>
                                                <select class="form-control" name="st_siswa" required>
                                        <option>AKTIF</option>
                                        <option>TIDAK AKTIF</option>
                                        
                                        </select> 
                                        </div>  
                                            </div>
                           <!--   <div class="col-lg-4">

                                            <div class="form-group">
                                                <label>SPP</label>
                                                <input type="text" class="form-control" placeholder="SPP" name="SPP" required>
                                            </div>
                                        </div> -->
                                    
                          <br> <br>  
                                    <button type="submit" class="btn btn-secondary btn-fill pull-center">Tambah Data</button>
                                    <div class="clearfix"></div>
                                </section>
                                    
                                </form>
            