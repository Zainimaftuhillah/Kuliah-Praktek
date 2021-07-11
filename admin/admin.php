<?php

include '../config/koneksi.php';
session_start();

  $id_user = $_SESSION['id_user'];

if (isset($_GET['content']))
$content = $_GET ['content'];
else $content = 'dashboard';

$sql = "SELECT * FROM user where id_user = '$id_user'";
      $query = mysqli_query($koneksi, $sql)or die(mysqli_error());
      $data  = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>DATA SISWA SMP CAWANG BARU</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/kerjapraktek.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg" data-color="blue">
            

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a class="simple-text">
                        <?= $data['namalengkap'] ?>
                
                    </br>
                        STAFF KESISWAAN
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="admin.php?content=dashboard">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="admin.php?content=siswa">
                
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Data Siswa</p>

                        </a>
                    </li>
                           
        
        
                    <li>
                        <a class="nav-link" href="admin.php?content=user">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Manajemen User</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="admin.php?content=lampiran">
                            <i class="nc-icon nc-notes"></i>
                            <p>Lampiran</p>
                        </a>
                    </li>
                     <li>
                        <a class="nav-link" href="admin.php?content=laporan">
                            <i class="nc-icon nc-notes"></i>
                            <p>Laporan</p>
                        </a>
                    </li>
                     <li>
                        <a class="nav-link" href="index.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> SISTEM INFORMASI DATA SISWA SMP CAWANG BARU </a>
                    
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">

                    <th><br><p align="right"><img src="../admin/logoo.png" height="45"></p></th>
                       
                            
                    </div>
                </div>
            </nav>


            <!-- End Navbar -->
           <div class="content">
                <div class="container-fluid">
            
                                <?php
                                if ($content=='dashboard')
                                    include 'dashboard.php';
                                if ($content=='siswa')
                                    include 'siswa.php';
                                if ($content=='user')
                                    include 'user.php';
                                if ($content=='lampiran')
                                    include 'lampiran.php';
                                if ($content=='tambah_siswa')
                                    include 'tambah_siswa.php';
                                if ($content=='tambah_walimurid')
                                    include 'tambah_walimurid.php';
                                if ($content=='tambah_admin')
                                    include 'tambah_admin.php';
                                if ($content=='edit_siswa')
                                    include 'edit_siswa.php';
                                if ($content=='edit_user')
                                    include 'edit_user.php';
                                 if ($content=='edit_admin')
                                    include 'edit_admin.php';
                                if ($content=='edit_lampiran')
                                    include 'edit_lampiran.php';
                                if ($content=='print_siswa')
                                    include 'print_siswa.php';
                                if ($content=='cetak_siswa')
                                    include 'cetak_siswa.php';
                                if ($content=='tujuh')
                                    include 'tujuh.php';
                                if ($content=='delapan')
                                    include 'delapan.php';
                                if ($content=='sembilan')
                                    include 'sembilan.php';
                                 if ($content=='aktif')
                                    include 'aktif.php';
                                 if ($content=='tidakaktif')
                                    include 'tidakaktif.php';
                                 if ($content=='laporan')
                                    include 'laporan.php';
                                if ($content=='print_spp')
                                    include 'print_spp.php';
                                 if ($content=='cetak_spp')
                                    include 'cetak_spp.php';
                                
                                
                                
                               
        
                                ?>

                            </div>      
                </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
       
                 </script>
                            Kerja Praktek | Zaini Maftuhillah | SMP CAWANG BARU
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
   
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<!-- <script src="../assets/js/plugins/bootstrap-notify.js"></script>
 --><!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>

</html>
