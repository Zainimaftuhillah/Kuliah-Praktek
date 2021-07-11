<?php
$aksi = 'modul/laporan/aksi.php';
$query_transaksi    = mysqli_query($conn, "SELECT *, sum(total) as subtotal, count(id) as totals from orders");
$count_transaksi    = mysqli_num_rows($query_transaksi);
$rows               = mysqli_fetch_array($query_transaksi);
function bulan($bln)
{
  if ($bln==1) {$string = "Januari";}
  elseif ($bln==2) {$string = "Februari";}
  elseif ($bln==3) {$string = "Maret";}
  elseif ($bln==4) {$string = "April";}
  elseif ($bln==5) {$string = "Mei";}
  elseif ($bln==6) {$string = "Juni";}
  elseif ($bln==7) {$string = "Juli";}
  elseif ($bln==8) {$string = "Agustus";}
  elseif ($bln==9) {$string = "September";}
  elseif ($bln==10) {$string = "Oktober";}
  elseif ($bln==11) {$string = "November";}
  elseif ($bln==12) {$string = "Desember";}
  return $string;
}
?>
<div class="content-wrapper" style="min-height: 320px;">
  <div class="breadcrumbs">
    <div class="breadcrumbs-inner">
      <div class="row m-0">
        <div class="col-sm-4">
          <div class="page-header float-left">
            <div class="page-title">
              <h1>Laporan</h1>
            </div>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="page-header float-right">
            <div class="page-title">
              <ol class="breadcrumb text-right">
                <li><a href="media.php?module=home">Dashboard</a></li>
                <li class="active">Laporan</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <?php if(empty($_GET['act'])){ ?>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <div class="card">
                      <div class="card-body">
                        <div class="stat-widget-five">
                          <div class="stat-icon dib flat-color-1">
                            <i class="pe-7s-cash"></i>
                          </div>
                          <div class="stat-content">
                            <div class="text-left dib">
                              <div class="stat-text"><?php echo $rows['totals']; ?></div>
                              <div class="stat-heading">Transaksi</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="card">
                      <div class="card-body">
                        <div class="stat-widget-five">
                          <div class="stat-icon dib flat-color-1">
                            <i class="pe-7s-cash"></i>
                          </div>
                          <div class="stat-content">
                            <div class="text-left dib">
                              <div class="stat-text">Rp <?php echo number_format($rows['subtotal'],0,',','.'); ?></div>
                              <div class="stat-heading">Total</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <a href="media.php?module=laporan&act=per_menu">
                      <div class="card">
                        <div class="card-body">
                          <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                              <i class="pe-7s-cash"></i>
                            </div>
                            <div class="stat-content">
                              <div class="text-left dib">
                                <div class="stat-text">Per Menu</div>
                                <div class="stat-heading">Laporan Transaksi Per Menu</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Per Bulan</label>
                  <form method="GET">
                    <input type="hidden" name="module" value="<?php echo $_GET['module'] ?>">
                    <input type="hidden" name="act" value="per_bulan">
                    <div class="form-group">
                      <label>Tahun</label>
                      <select class="form-control" name="tahun" required>
                        <?php
                        $tahun=mysqli_query($conn,"SELECT distinct year(tanggal) as tahun from orders order by tanggal desc");
                        foreach ($tahun as $t) {
                          echo "<option value='".$t['tahun']."'";
                          echo date('Y')==$t['tahun'] ? "selected" : "";
                          echo ">".$t['tahun']."</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Bulan</label>
                      <select class="form-control" name="bulan" required>
                        <?php
                        for ($i = 1; $i < 13; $i++) {
                          echo "<option value='".$i."'";
                          echo date('m')==$i ? "selected" : "";
                          echo ">".bulan($i)."</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>
              <?php
            }else{
              switch($_GET['act']){
                case "per_bulan":
                $tahun = $_GET['tahun'];
                $bulan = $_GET['bulan'];
                $bulan = $bulan < 10 ? "0".$bulan : $bulan;
                ?>
                <div class="card-header">
                  <input type="button" class="btn btn-primary" onclick="printDiv('print')" value="PRINT" />
                </div>
                <div class="card-body">
                  <div class="table-responsive" id="print">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode Transaksi</th>
                          <th>Tanggal</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 0;
                        $subtotal = 0;
                        $sql = "SELECT * from orders WHERE tanggal like '".$tahun."-".$bulan."%' ORDER BY tanggal";
                        $query = mysqli_query($conn, $sql);
                        foreach($query as $row){
                          $no++;
                          $subtotal += $row['total'];
                          ?>
                          <tr>
                            <td><?php echo $no; ?></td>
                            <td>
                              <!-- <a href="media.php?module=transaksi&act=detail&id=<?php echo $row['id']; ?>"> -->
                                #<?php echo $row['kode']; ?>
                                <!-- </a> -->
                              </td>
                              <td><?php echo date('d F Y', strtotime($row['tanggal'])); ?></td>
                              <td>Rp <?php echo number_format($row['total'],0,',','.'); ?></td>
                            </tr>
                          <?php } ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan="3" align="right">Total : </td>
                            <td>Rp <?php echo number_format($subtotal,0,',','.'); ?></td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                  <?php
                  break;
                  case "per_tanggal":
                  $tgl1 = $_GET['tgl1'];
                  $tgl2 = $_GET['tgl2'];
                  ?>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Per Tanggal</label>
                      <form action="<?php echo $aksi; ?>?module=laporan&act=per_tanggal" method="POST">
                        <input type="date" name="tgl1" value="<?php echo $tgl1; ?>"> sampai dengan <input type="date" name="tgl1" value="<?php echo $tgl2; ?>"> <button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
                      </form>
                    </div>
                  </div>
                  <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode Transaksi</th>
                          <th>Tanggal</th>
                          <th>Total</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 0;
                        $subtotal = 0;
                        $query = mysqli_query($conn, "SELECT * from orders WHERE tanggal >= '".$tgl1."' AND tanggal <= '".$tgl2."' ORDER BY id DESC");
                        foreach($query as $row){
                          $no++;
                          $subtotal += $row['total'];
                          ?>
                          <tr>
                            <td><?php echo $no; ?></td>
                            <td><a href="media.php?module=transaksi&act=detail&id=<?php echo $row['id']; ?>">#<?php echo $row['kode_transaksi']; ?></a></td>
                            <td><?php echo date('d F Y', strtotime($row['tanggal'])); ?></td>
                            <td>Rp <?php echo number_format($row['total'],0,',','.'); ?></td>
                            <td><?php echo $row['status']; ?></td>
                          </tr>
                        <?php } ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="3" align="right">Total : </td>
                          <td>Rp <?php echo number_format($subtotal,0,',','.'); ?></td>
                          <td colspan="2"></td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <?php
                  break;
                  case "per_menu":
                  $bulan = ['',"Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
                  mysqli_query($conn,"Truncate rank");
                  $menu = mysqli_query($conn, "SELECT * FROM produk");
                  foreach($menu as $rowm){
                    $sql="SELECT *, sum(qty) as sub FROM orders_detail WHERE orders_detail.produk_id = '".$rowm['id']."' ";
                    $detail_pen = mysqli_query($conn, $sql);
                    $rowdp      = mysqli_fetch_array($detail_pen);
                    mysqli_query($conn,"INSERT INTO rank values('$rowm[id]','$rowm[nama]','$rowdp[sub]')");
                  }
                  ?>
                  <div class="card-body">
                    <h3 class="mt-2 mb-2">Laporan Menu <?php echo $bulan[$_GET['bulan']] ?> <?php echo $_GET['tahun'] ?></h3>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Menu</th>
                          <th>Jumlah</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $menu = mysqli_query($conn, "SELECT * FROM rank order by qty desc");
                        foreach($menu as $rowm){
                          $sql="SELECT *, sum(qty) as sub FROM orders_detail WHERE orders_detail.produk_id = '".$rowm['produk_id']."' ";
                          $detail_pen = mysqli_query($conn, $sql);
                          $rowdp      = mysqli_fetch_array($detail_pen);
                          ?>
                          <tr>
                            <td><?php echo $rowm['nama']; ?></td>
                            <td><?php echo $rowdp['sub'] > 0 ? $rowdp['sub'] : 0; ?></td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                <?php }
              } ?>
            </div>
          </div>
        </div>
      </div><!-- .animated -->
    </div><!-- .content -->
  </div>
  <div class="clearfix"></div>
  <script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
  <script src="https://www.chartjs.org/samples/latest/utils.js"></script>
  <script>
    var config = {
      type: 'bar',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
        datasets: [{
          label: 'Transaksi',
          backgroundColor: window.chartColors.green,
          borderColor: window.chartColors.blue,
          data: [
          <?php
          for($i = 1; $i <= 12; $i++){
            $chart = mysqli_query($conn, "SELECT * from orders WHERE month(tanggal) = '".$i."'");
            $count = mysqli_num_rows($chart);
            echo $count.", ";
          }
          ?>
          ],
          fill: false,
        }]
      },
      options: {
        responsive: true,
        tooltips: {
          mode: 'index',
          intersect: false,
        },
        hover: {
          mode: 'nearest',
          intersect: true
        },
        scales: {
          xAxes: [{
            display: true,
            scaleLabel: {
              display: true,
              labelString: 'Month'
            }
          }],
          yAxes: [{
            display: true,
            scaleLabel: {
              display: true,
              labelString: 'Value'
            }
          }]
        }
      }
    };
    window.onload = function() {
      var ctx = document.getElementById('canvas').getContext('2d');
      window.myLine = new Chart(ctx, config);
    };
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
   }
 </script>