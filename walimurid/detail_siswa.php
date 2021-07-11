<?php

    // error_reporting(0);

    include '../config/koneksi.php';

    $id_siswa = $_GET['id_siswa'];

    $detail    = "SELECT * FROM siswa WHERE id_siswa = '$id_siswa'";
    $hasil   = mysqli_query($koneksi, $detail);
    $data    = mysqli_fetch_array($hasil);

?>


<div class="col-md-12" style="min-height:500px">
    <hr>
    <div class="col-md-14" style="padding:1px">
        <ol class="breadcrumb" style="margin:0;border-radius:0;">
            <li class="active"><a href="walimurid.php?content=dashboard">Dashboard</a> / Detail Data Siswa</li>
        </ol>
    </div>
    <br>
    <form class="form-horizontal" action="#" method="POST">
        <div class="panel-group">
            <div class="panel panel-primary">
                <div class="panel-heading">Data Siswa</div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th><br>
                                <p align="center"><img src="../admin/logoo.png" height="100"></p>
                            </th>
                            <td><br>
                                <p align="center">
                                    <font size="6px"><b>SMP CAWANG BARU</b></font><br>Jl. Cawang Baru No.543,
                                    RT.7/RW.10, Cipinang Cempedak, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah
                                    Khusus Ibukota Jakarta 13340
                                </p>
                            </td>
                        </tr>
                    </table>

                    <table class="table table-bordered">
                        <tr>
                            <input type="hidden" name="id_siswa" value="<?php echo $id_siswa?>">

                            <th>
                                <font size="3px">Nama </font>
                            </th>
                            <td width="500"><i>
                                    <font size="3px"><?php echo $data['nama'];?></font>
                                </i></td>
                        </tr>
                        <tr>
                            <th>
                                <font size="3px">NISN </font>
                            </th>
                            <td width="500"><i>
                                    <font size="3px"><?php echo $data['NISN'];?></font>
                                </i></td>
                        </tr>
                        <tr>
                            <th>
                                <font size="3px">NIPD</font>
                            </th>
                            <td width="500"><i>
                                    <font size="3px"><?php echo $data['NIPD'];?></font>
                                </i></td>
                        </tr>
                        <tr>
                            <th>
                                <font size="3px">Kelas</font>
                            </th>
                            <td width="500"><i>
                                    <font size="3px"><?php echo $data['kelas'];?></font>
                                </i></td>
                        </tr>
                        <tr>
                            <th>
                                <font size="3px">Tempat</font>
                            </th>
                            <td width="500"><i>
                                    <font size="3px"><?php echo $data['tempat'];?></font>
                                </i></td>
                        </tr>
                        <tr>
                            <th>
                                <font size="3px">Tanggal </font>
                            </th>
                            <td width="500"><i>
                                    <font size="3px"><?php echo $data['tanggal'];?></font>
                                </i></td>
                        </tr>
                        <tr>
                            <th>
                                <font size="3px">Jenis Kelamin </font>
                            </th>
                            <td width="500"><i>
                                    <font size="3px"><?php echo $data['jk_siswa'];?></font>
                                </i></td>
                        </tr>
                        <tr>
                            <th>
                                <font size="3px">Ayah</font>
                            </th>
                            <td width="500"><i>
                                    <font size="3px"><?php echo $data['ayah'];?></font>
                                </i></td>
                        </tr>
                        <tr>
                            <th>
                                <font size="3px">Ibu</font>
                            </th>
                            <td width="500"><i>
                                    <font size="3px"><?php echo $data['ibu'];?></font>
                                </i></td>
                        </tr>
                        <tr>
                            <th>
                                <font size="3px">Agama</font>
                            </th>
                            <td width="500"><i>
                                    <font size="3px"><?php echo $data['agama'];?></font>
                                </i></td>
                        </tr>
                        <tr>
                            <th>
                                <font size="3px">Alamat</font>
                            </th>
                            <td width="500"><i>
                                    <font size="3px"><?php echo $data['alamat'];?></font>
                                </i></td>
                        </tr>
                        <tr>
                            <th>
                                <font size="3px">Tahun Masuk</font>
                            </th>
                            <td width="500"><i>
                                    <font size="3px"><?php echo $data['th_masuk'];?></font>
                                </i></td>
                        </tr>
                        <tr>
                            <th>
                                <font size="3px">Status Siswa</font>
                            </th>
                            <td width="500"><i>
                                    <font size="3px"><?php echo $data['st_siswa'];?></font>
                                </i></td>
                        </tr>
                        <tr>
                            <th>
                                <font size="3px">SPP</font>
                            </th>
                            <td width="500"><i>
                                    <font size="3px">Rp. <?= number_format($data['SPP'],0,",",".") ?></font>
                                </i></td>
                        </tr>
                        <br>


                    </table>
                    <p align="right">

                        <a href="walimurid.php?content=data_siswa"><button type="button"
                                class="btn btn-secondary btn-fill pull-right">Kembali</button></a>
                    </p>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </form>

    </html>
    <br>
    <br>


    <section id="data" class="data">
        <div class="col-md-12" style="min-height:500px">
            <hr>

            <div class="panel-group">
                <div class="panel panel-primary">
                    <div class="panel-heading">Lampiran</div>
                    <div class="panel-body">

                        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
                            <form action="../config/lampiran.php" method="POST">


                                <div class="col-lg-6 form-group">
                                    <input type="hidden" name='id_siswa' value="<?=$data['id_siswa'] ?>">


                                </div>
                                <br>
                        </div>


                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control" name="keterangan" rows="8 "
                                data-msg="Harap keterangan di isi"
                                placeholder="Isi jika terdapat kesalahan pada biodata siswa dan laporan tunggakan spp atau Hubungi (Mahendra:089612354623)"
                                name="keterangan" id="keterangan"></textarea>
                            <div class="validate"></div>
                        </div>



                        <div class="mb-3">
                            <div class="loading"></div>
                            <div class="error-message"></div>
                            <div class="sent-message"></div>
                        </div>
                        <div class="text-center"><button type="submit" class="btn-primary btn-fill pull-center">Kirim
                            </button></div>

                        </form>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <!-- End data Us Section -->