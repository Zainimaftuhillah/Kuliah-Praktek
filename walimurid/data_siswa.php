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
    background-color: #0000FF;
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
    <div class="content">
        <div class="container-fluid">


            <div class="col-md-14" style="padding:1px">
                <ol class="breadcrumb" style="margin:0;border-radius:0;">
                    <li class="active"><a href="walimurid.php?content=dashboard">Dashboard</a> / Data Siswa</li>
                </ol>
            </div>
            <br>
            <div class="content">

                <div class="dropdown">


                </div>
                <br>



                <form class="form-inline" action="" method="POST">
                    <div class="form-group" style="float: right;">
                        <input size="30px" type="text" name="pencarian" class="form-control" placeholder="pencarian"
                            autocomplete="off">
                        <button type="submit" class="btn btn-primary" data-toggle="tooltip" title="pencarian"><i class="fa 
                        fa-search"></i></button>
                        <button type="submit" class="btn btn-warning" data-toggle="tooltip" title="refresh"
                            value="remove"><i class="fa fa-refresh"></i></button>
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
                                <font color="white">SPP</font>
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
                        $ids = $_SESSION['id_siswa'];
          error_reporting(0);

            include '../config/koneksi.php';


            $batas  = 8;
            $hal    = @$_GET['hal'];
            if (empty($hal)) {
              $posisi = 0;
              $hal    = 1;
            } else {
              $posisi = ($hal - 1) * $batas;
            }
             if($_SERVER['REQUEST_METHOD'] == "POST") {
            $pencarian = trim(mysqli_real_escape_string($koneksi, $_POST['pencarian']));
            if($pencarian !=''){
            $sql = "SELECT * FROM siswa WHERE id_siswa AND nama LIKE '%$pencarian%' OR 
            kelas LIKE '%$pencarian%' OR 
            NISN LIKE '%$pencarian%' OR 
            NIPD LIKE '%$pencarian%' ORDER BY id_siswa DESC";
            
                $query = $sql;
                $queryJml = $sql;
              } else {
                $query = "SELECT * FROM siswa a JOIN spp b on a.id_siswa = b.id_user WHERE id_siswa = '$ids' ORDER BY id_siswa DESC LIMIT $posisi, $batas ";
                $queryJml = "SELECT * FROM siswa a JOIN spp b on a.id_siswa = b.id_user WHERE id_siswa = '$ids' ORDER BY id_siswa DESC";
                $no = $posisi + 1;
              }
            } else {
              $query = "SELECT * FROM siswa a JOIN spp b on a.id_siswa = b.id_user WHERE id_siswa = '$ids' ORDER BY id_siswa DESC LIMIT $posisi, $batas ";
              $queryJml = "SELECT * FROM siswa a JOIN spp b on a.id_siswa = b.id_user WHERE id_siswa = '$ids' ORDER BY id_siswa DESC";
              $no = $posisi + 1;
            }

                     
            $query = mysqli_query($koneksi, $query)or die(mysqli_error());
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
                        echo '<td>'.$data['ibu'].'</td>';?>
                        <td>
                            <?php if ($data['SPP'] == ''){?>
                            <span class="badge bg-danger">Belum Membayar Spp</span>
                            <?php } else { ?>
                            Rp. <?= number_format($data['SPP'],0,",",".") ?>
                            <?php } ?>
                        </td>
                        <td width="10"><a data-toggle="tooltip" data-placement="left" title="detail"
                                href=walimurid.php?content=detail_siswa&id_siswa=<?= $data['id_siswa']?>><i
                                    class="fa fa-edit fa-fw"></i></a></td>
                        <td width="10"><a data-toggle="tooltip" data-placement="left" title="print"
                                href=walimurid.php?content=print_siswa&&id_siswa='<?= $data['id_siswa'] ?>'><i
                                    class="fa fa-print fa-fw"></i></a></td>
                        <td width="10">
                            <?php if ($data['SPP'] == ''){?>
                            <a class="btn btn-info btn-sm text-white" data-toggle="modal" data-target="#modelId">Bayar
                                Spp</a>
                            <?php } else { ?>
                            <span class="badge bg-info">Sudah Membayar Spp</span>
                            <?php } ?>

                        </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <form action="bayar_spp.php" method="POST">
                                                <input type="hidden" name="id_user" value="<?= $data['id_user'] ?>">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="text-left">Nominal Spp</label>
                                                        <input id="rupiah" type="text" class="form-control"
                                                            name="jumlah_spp">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <button class="btn btn-info btn-sm" type="submit">Bayar
                                                            Spp</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php
                        $no++;  
                      }
                    }
                    //die(var_dump($query));

                ?>



                    </tbody>
                </table>
                <!-- /.table-responsive -->


                <?php
     if($_SERVER['REQUEST_METHOD'] == "POST") {
            $pencarian = trim(mysqli_real_escape_string($koneksi, $_POST['pencarian']));
        echo "<div style=\"float:left;\">";
        $jml = mysqli_num_rows(mysqli_query($koneksi, $queryJml));
        echo "Data Hasil Pencarian: <b>$jml</b>";
        echo "</div>";
      } else { ?>
                <div style="float:right;">
                    <?php
          $jml = mysqli_num_rows(mysqli_query($koneksi, $queryJml));
          echo "Jumlah Data: <b>$jml</b>";
          ?>
                </div>
                <div style="float:left;">
                    <ul class="pagination pagination-sm" style="margin: 0">
                        <?php
            $jml_hal = ceil($jml / $batas);
            for ($i=1; $i <= $jml_hal; $i++) {
              if ($i != $hal) {
                echo "<li><a href=\"walimurid.php?content=data_siswa&&hal=$i\">$i</a></li>";
              } else {
                echo "<li class=\"active\"><a>$i</a></li>";
              }
            }
            ?>
                    </ul>
                </div>
                <?php
      }
?>
            </div>
</section>

<script>
var rupiah = document.getElementById('rupiah');
rupiah.addEventListener('keyup', function(e) {
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah.value = formatRupiah(this.value, 'Rp. ');
});

/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}
</script>