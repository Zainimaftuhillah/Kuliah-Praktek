<style>
table {
    border-collapse: collapse;
    width: 100%;
}

table,
th,
td {
    text-align: left;
    padding: 8x;
}

tr : nth-child (even) {
    background-color: #bbdfed;
}

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
<section class="content">

    <div class="col-md-14" style="padding:1px">
        <ol class="breadcrumb" style="margin:0;border-radius:0;">
            <li class="active"><a href="admin.php?content=dashboard">Dashboard</a> / Laporan SPP Siswa Per Tanggal
                <?= $_POST['tanggal_dari'] ?> - <?= $_POST['tanggal_sampai'] ?></li>
        </ol>
    </div>
    <br>

    <form>

        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">FILTER
            <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="admin.php?content=aktif">AKTIF</a></li>
            <li><a href="admin.php?content=tidakaktif">TIDAK AKTIF</a></li>
        </ul>
    </form>


    <div class="content" align="right">

        <div class="dropdown">
            <a href="admin.php?content=tambah_siswa">
                <button type="button" class="btn btn-secondary">SISWA<i
                        class="fa fa-plus-circle fa-fw"></i></button></a>


            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">KELAS
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="admin.php?content=siswa">Keseluruhan</a></li>
                <li><a href="admin.php?content=tujuh">VII</a></li>
                <li><a href="admin.php?content=delapan">VIII</a></li>
                <li><a href="admin.php?content=sembilan">IX</a></li>
            </ul>



            <a href="admin.php?content=cetak_siswa">
                <button type="button" class="btn btn-secondary">PRINT<i class=""></i></button></a>




        </div>



        <form class="form-inline" action="" method="POST">
            <div class="form-group" style="float: right;">
                <input size="30px" type="text" name="pencarian" class="form-control" placeholder="pencarian"
                    autocomplete="off">
                <button type="submit" class="btn btn-secondary" data-toggle="tooltip" title="pencarian"><i class="fa 
                        fa-search"></i></button>
                <button type="submit" class="btn btn-warning" data-toggle="tooltip" title="refresh" value="remove"><i
                        class="fa fa-refresh"></i></button>

            </div>


        </form>

        <br>

        <form class="form-inline" action="laporan_tanggal.php" method="POST">
            <div class="form-group" style="float: right;">
                <input size="30px" type="date" name="tanggal_dari" class="form-control" autocomplete="off">
                <input size="30px" type="date" name="tanggal_sampai" class="form-control" autocomplete="off">
                <button type="submit" class="btn btn-secondary" data-toggle="tooltip" title="pencarian"><i class="fa 
                        fa-search"></i> Cari Laporan Per Bulan</button>

            </div>


        </form>




        <br>




        <table class="table table-hover">
            <thead>
                <tr>
                    <th>
                        <font color="white">No</font>
                    </th>
                    <th>
                        <font color="white">Nama </font>
                    </th>
                    <th>
                        <font color="white">NISN</font>
                    </th>
                    <th>
                        <font color="white">NIPD</font>
                    </th>
                    <th>
                        <font color="white">kelas</font>
                    </th>
                    <th>
                        <font color="white">Tempat Lahir</font>
                    </th>
                    <th>
                        <font color="white">Tanggal Lahir</font>
                    </th>
                    <th>
                        <font color="white">Jenis Kelamin</font>
                    </th>
                    <th>
                        <font color="white">Ayah</font>
                    </th>
                    <th>
                        <font color="white">Ibu</font>
                    </th>
                    <th>
                        <font color="white">SPP </font>
                    </th>


                    <th colspan="4">
                        <font color="white">
                            <center>Action</center>
                        </font>
                    </th>
                </tr>
            </thead>



            <tbody>


                <?php

            include '../config/koneksi.php';

                    $tanggal_dari = $_POST['tanggal_dari'];
                    $tanggal_sampai = $_POST['tanggal_sampai'];
                    $query = mysqli_query($koneksi, "SELECT * FROM siswa  WHERE tanggal_spp >= '$tanggal_dari' AND tanggal_spp <= '$tanggal_sampai' ORDER BY id_siswa DESC");
                    $no = 1;        
                    while($data = mysqli_fetch_array($query)) {  ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['nama']?></td>
                    <td><?= $data['NISN']?> </td>
                    <td><?= $data['NIPD']?></td>
                    <td><?= $data['kelas']?> </td>
                    <td><?= $data['tempat']?> </td>
                    <td><?= $data['tanggal']?></td>
                    <td><?= $data['jk_siswa']?></td>
                    <td><?= $data['ayah']?></td>
                    <td><?= $data['ibu']?></td>
                    <td>
                        <?php if ($data['SPP'] == '') {?>
                        <span class="badge bg-danger"> Belum Membayar SPP</span>
                        <?php } else {?>
                        <span class="badge bg-info"><?= number_format($data['SPP'],0,",",".") ?></span>
                        <?php }?>
                    </td>



                    <td width="10">
                        <center><a data-toggle="tooltip" data-placement="left" title="Lihat Data Lengkap"
                                href=admin.php?content=edit_siswa&&id_siswa=<?= $data['id_siswa']?>><i
                                    class="fa fa-edit fa-fw"></i></a>
                    </td>
                    <td width="10">
                        <center><a data-toggle="tooltip" data-placement="left" title="print"
                                href=admin.php?content=print_siswa&&id_siswa=<?= $data['id_siswa']?>><i
                                    class="fa fa-print fa-fw"></i></a>
                    </td>

                    <td width="10"><a data-toggle="tooltip" data-placement="left" title="Delete"
                            href=../config/delete_siswa.php?id_siswa=<?= $data['id_siswa']?>><i
                                class="fa fa-trash fa-fw"></i></a></td>
                </tr>
                <?php
                      }
                ?>



            </tbody>
        </table>
    </div>


</section>