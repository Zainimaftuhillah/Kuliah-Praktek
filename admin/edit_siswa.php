<?php

    //error_reporting(0);

    include '../config/koneksi.php';

    $id_siswa   = $_GET['id_siswa'];

    $edit    = "SELECT * FROM siswa WHERE id_siswa = '$id_siswa'";
    $hasil   = mysqli_query($koneksi, $edit)or die(mysqli_error());
    $data    = mysqli_fetch_array($hasil);

?>

<head>
    <title>Edit Data Siswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<section class="content">

    <div class="col-md-14" style="padding:1px">
        <ol class="breadcrumb" style="margin:0;border-radius:0;">
            <li class="active"><a href="admin.php?content=siswa">Dashboard</a> / Edit Data Siswa</li>
        </ol>
    </div>
    <br>

    <div class="col-md-12" style="min-height:500px">
        <hr>
        <form class="form-horizontal" action="../config/edit_siswa.php" method="POST">
            <div class="panel-group">
                <div class="panel panel-primary">
                    <div class="panel-heading">Edit Data Siswa</div>
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
                            <input type="hidden" name="id_siswa" value="<?php echo $id_siswa ?>">

                            <tr>
                                <th>
                                    <font size="2px">Nama </font>
                                </th>
                                <td width="600"><input class="form-control" name="nama" type="text"
                                        value="<?php echo $data['nama']; ?>" required></td>

                            </tr>
                            <tr>
                                <th>
                                    <font size="2px">NISN</font>
                                </th>
                                <td><input class="form-control" name="NISN" type="number"
                                        value="<?php echo $data['NISN']; ?>" required></td>
                            </tr>
                            <tr>
                                <th>
                                    <font size="2px">NIPD</font>
                                </th>
                                <td><input class="form-control" name="NIPD" type="number"
                                        value="<?php echo $data['NIPD']; ?>" required></td>
                            </tr>

                            <tr>
                                <th>
                                    <font size="2px">Kelas</font>
                                </th>
                                <td>
                                    <select name="kelas" id="kelas" class="form-control">
                                        <option value="<?php echo $data['kelas'];?>"><?php echo $data['kelas'];?>
                                        </option>
                                        <option value="VII">VII</option>
                                        <option value="VIII">VIII</option>
                                        <option value="IX">IX</option>
                                    </select>
                            </tr>
                            <tr>
                                <th>
                                    <font size="2px">Tempat Lahir</font>
                                </th>
                                <td><input class="form-control" name="tempat" type="text"
                                        value="<?php echo $data['tempat']; ?>" required></td>
                            </tr>
                            <tr>
                                <th>
                                    <font size="2px">Tanggal Lahir</font>
                                </th>
                                <td><input class="form-control" name="tanggal" type="date"
                                        value="<?php echo $data['tanggal']; ?>" required></td>
                            </tr>
                            <tr>
                                <th>
                                    <font size="2px">Jenis Kelamin</font>
                                </th>
                                <td><input class="form-control" name="jk_siswa" type="text"
                                        value="<?php echo $data['jk_siswa']; ?>" required></td>
                            </tr>
                            <tr>
                                <th>
                                    <font size="2px">Ayah</font>
                                </th>
                                <td><input class="form-control" name="ayah" type="text"
                                        value="<?php echo $data['ayah']; ?>" required></td>
                            </tr>
                            <tr>
                                <th>
                                    <font size="2px">Ibu</font>
                                </th>
                                <td><input class="form-control" name="ibu" type="text"
                                        value="<?php echo $data['ibu']; ?>" required></td>
                            </tr>
                            <tr>
                                <th>
                                    <font size="2px">Agama</font>
                                </th>
                                <td><select name="agama" id="agama" class="form-control">
                                        <option value="<?php echo $data['agama'];?>"><?php echo $data['agama'];?>
                                        </option>

                                        <option value="ISLAM">ISLAM</option>
                                        <option value="PROTESTAN">PROTESTAN</option>
                                        <option value="BUDHA">BUDHA</option>
                                        <option value="HINDU">HINDU</option>
                                        <option value="KATHOLIK">KATHOLIK</option>
                                    </select>
                            </tr>
                            <tr>
                                <th>
                                    <font size="2px">Alamat</font>
                                </th>
                                <td><input class="form-control" name="alamat" type="text"
                                        value="<?php echo $data['alamat']; ?>" required></td>
                            </tr>
                            <tr>
                                <th>
                                    <font size="2px">Sekolah Asal</font>
                                </th>
                                <td><input class="form-control" name="sekolah_asal" type="text"
                                        value="<?php echo $data['sekolah_asal']; ?>" required></td>
                            </tr>
                            <tr>
                                <th>
                                    <font size="2px">Tahun Masuk</font>
                                </th>
                                <td><input class="form-control" name="th_masuk" type="text"
                                        value="<?php echo $data['th_masuk']; ?>" required></td>
                            </tr>
                            <tr>
                                <th>
                                    <font size="2px">Status Siswa</font>
                                </th>
                                <td><select name="st_siswa" id="st_siswa" class="form-control">
                                        <option value="<?php echo $data['st_siswa'];?>"><?php echo $data['st_siswa'];?>
                                        </option>

                                        <option value="AKTIF">AKTIF</option>
                                        <option value="TIDAK AKTIF">TIDAK AKTIF</option>
                                    </select>
                            </tr>
                            <tr>
                                <th>
                                    <font size="2px">SPP</font>
                                </th>
                                <td><input id="rupiah" class="form-control" name="SPP" type="text"
                                        value="<?php echo $data['SPP']; ?>" required></td>
                            </tr>
                            <br>
                            <br>



                        </table>
                        <p align="right">
                            <button type="submit" class="btn btn-primary btn-fill pull-right">Simpan</button>
                            <a href="admin.php?content=siswa"><button type="button"
                                    class="btn btn-secondary btn-fill pull-left">Kembali</button></a>
                        </p>

        </form>

</section>
<br>

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