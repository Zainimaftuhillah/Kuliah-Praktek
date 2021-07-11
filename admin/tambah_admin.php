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
                               <center><h3 class="title">DATA ADMIN</center></h3>
                            </div>

                            <div class="content">
                                <form action="../config/add_admin.php" method="POST" >
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="Username" name="username" required>
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input required type="text" class="form-control" placeholder="Password" name="password" required>   
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                                <input required type="text" class="form-control" placeholder="Nama Lengkap" name="namalengkap" required>   
                                            </div>
<br>
                                        <p align="right">
                                    <button type="submit" class="btn btn-secondary btn-fill">Tambah Data</button></p>
                                    <div class="clearfix"></div>
                                    
                                </form>
                              </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            