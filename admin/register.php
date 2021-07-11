<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</head>

<body>


    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

    <h1> DATA SISWA</h1>

    <h1> SMP CAWANG BARU JAKARTA TIMUR </h1>
    <br>

    <div class="kotak_login">
        <p class="tulisan_login" style="color:white;"><b>Silahkan Daftar</b></p>

        <form action="register_act.php" method="post">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username .." required="required">

            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password .." required="required">

            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap .." required="required">

            <label>Pilih Nama Siswa</label>

            <select name="id_siswa" class="form-control">
                <?php include '../config/koneksi.php'; $query = mysqli_query($koneksi, "SELECT * FROM siswa"); while($data = mysqli_fetch_array($query)){ ?>
                <option value="<?= $data['id_siswa']?>"><?= $data['NISN']?> - <?= $data['nama'] ?></option>
                <?php } ?>
            </select>

            <button type="submit" class="tombol_login btn btn-info mt-3"><b>Daftar Sekarang</b></button>

            <br />
            <br />

        </form>

    </div>


</body>

</html