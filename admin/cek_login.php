
<?php

    session_start();
// menghubungkan php dengan koneksi database
include '../config/koneksi.php';
 
// menangkap data yang dikirim dari form login


$username       = $_POST['username'];
$password       = $_POST['password'];

 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

$data = mysqli_fetch_array($login,MYSQLI_BOTH);
    
$id_user        = $data['id_user'];
$id_siswa       = $data['id_siswa'];
$username       = $data['username'];
$password       = $data['password'];
$namalengkap    = $data['namalengkap'];
$level          = $data['level'];

// cek apakah username dan password di temukan pada database
if($cek > 0){
    // cek jika user login sebagai admin
    if($data['level']=="admin"){
 
        // buat session login dan username
        
        $_SESSION['id_user']        = $id_user;
        $_SESSION['id_siswa']       = $id_siswa;
        $_SESSION['username']       = $username;
        $_SESSION['level']          = $level;
        $_SESSION['namalengkap']    = $namalengkap;
        $_SESSION['level']          = $level;
        // alihkan ke halaman dashboard admin
        header("location:admin.php");

         // cek jika user login sebagai pengurus
    }else if($data['level']=="walimurid"){
        // buat session login dan username
        $_SESSION['id_user']        = $id_user;
        $_SESSION['id_siswa']       = $id_siswa;
        $_SESSION['username']       = $username;
        $_SESSION['level']          = $level;
        $_SESSION['namalengkap']    = $namalengkap;
        $_SESSION['level']          = $level;
        // alihkan ke halaman dashboard pengurus
        header("location:../walimurid/walimurid.php");
    }else{
        // alihkan ke halaman login kembali
        header("location:index.php?pesan=gagal");
    }   
}else{
    header("location:index.php?pesan=gagal");
}
 
?>