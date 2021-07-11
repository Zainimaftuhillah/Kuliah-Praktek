<?php
  include('../../config/koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PT Testindo</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <img src="../../images/logo.png">
          <small class="float-right">Date: <?php echo date('Y-m-d'); ?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Inquiry</th>
                  <th>Nama</th>
                  <th>Kebutuhan</th>
                  <th>Jumlah</th>
                  <th>Tanggal</th>
                  <th>Telpon</th>
                  <th>Email</th>
                  <th>Sales</th>
                  <th>Progress</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 0;
                $query = mysqli_query($conn, "SELECT * FROM inquiry WHERE date_purchased >= '".$_GET['tgl1']."' AND date_purchased <= '".$_GET['tgl2']."' ORDER BY id DESC");
                foreach($query as $row){
                  $no++;
                ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['inquiry']; ?></td>
                      <td><?php echo $row['namacustomer']; ?></td>
                      <td><?php echo $row['kebutuhan']; ?></td>
                      <td><?php echo $row['jumlah']; ?></td>
                      <td><?php echo date('d/m/Y H:i A', strtotime($row['date_purchased'])); ?></td>
                      <td><?php echo $row['phone_number']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['sales']; ?></td>
                      <td><?php echo $row['progress']; ?></td>
                </tr>
                <?php } ?>
              </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
