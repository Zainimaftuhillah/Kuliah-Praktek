<?php
/// koneksi ke database
// $conn = mysqli_connect("localhost","root", "","phpdasar");
// function query($query){
    
//     global $conn;
//     $result= mysqli_query($conn,$query);
//     $rows = [];
//     while ($row = mysqli_fetch_assoc($result)){
//         $rows[] = $row;
//     }
//     return $rows;
// }

function tambah($data) {
    global $conn;
    $nim= htmlspecialchars($data["id_siswa"]);
    $nama= htmlspecialchars($data["keterangan"]);
    
    
    /// upload gambar
    $fileToUpload = upload();
    if (!$fileToUpload){
        return false;
    }
    
   $query="INSERT INTO lampiran
    VALUES
    ('','$nim','$nama','$email','$jurusan','$fileToUpload')
    ";
mysqli_query($conn,$query); 

return mysqli_affected_rows($conn);/// mengembalikan nilai 0 atau 1 untuk menampilakan pesan kesalahan di tambah.php
}

function upload (){
    $namaFile   = $_FILES['fileToUpload']['name'];
    $ukuranFile = $_FILES['fileToUpload']['size']; 
    $error      = $_FILES['fileToUpload']['error'];
    $tmpName    = $_FILES['fileToUpload']['tmp_name'];
    
    /// cek apakah gambar tidak ada gambar yang di upload
    if($error == 4){
        echo "<script>
        alert('masukan file!');
        document.location.href='tambah.php';
        </script>";
        return false;
    }
    //// cek format gambar atau bukan
    $ekstensiGambarValid    = ['jpg','jpeg','png'];
    $esktensiGambar         = explode('.',$namaFile);
    $esktensiGambar         = strtolower(end($esktensiGambar)); //end menyimpan kata paling akhir strtolower merubah hurufkaptal menjadi kecil 
    if( !in_array($esktensiGambar,$ekstensiGambarValid)){ /// ada g sebuah string di dalam array. mencari jarum dalam jerami, jika tidak sesuai ketentuan maka muncul pesan.
        echo "<script>
        alert('masukan format gambar!');
        document.location.href='tambah.php';
        </script>";
        return false;
    }
    /// cek ukuran gambar jika terlalu besar
    if($ukuranFile > 1000000){
        echo "<script>
        alert('Ukuran file terlalu besar!');
        document.location.href='tambah.php';
        </script>";
        return false;
    }
    
    /// generate nama gambar baru
    $namaFileBaru   = uniqid();
    $namaFileBaru   .= '.';
    $namaFileBaru   .= $esktensiGambar;
    //// lolos pengecekan gambar akan di upload
    move_uploaded_file($tmpName,'img/'.$namaFileBaru);
    return $namaFileBaru;
}

// function hapus ($id){
//     global $conn;
//     $query = "DELETE FROM mahasiswa WHERE id=$id";
//     mysqli_query($conn,$query);
//     return mysqli_affected_rows($conn);
// }

// function edit($po){
//     global $conn;
//     $id=$po["id"];
//     $nim= htmlspecialchars($po["nim"]);
//     $nama= htmlspecialchars($po["nama"]);
//     $email= htmlspecialchars($po["email"]);
//     $jurusan= htmlspecialchars($po["jurusan"]);
//     $gambarLama= htmlspecialchars($po["gambarLama"]);
//     // var_dump($gambarLama);die;
//     ///cek user mengambil gambar baru
//     if($_FILES['gambar']['error'] === 4 ){
//         $gambar = $gambarLama;
        
//     }else{
//         $gambar= upload();
//     }
    
//    $query="UPDATE mahasiswa SET
//     nim = '$nim',
//     nama = '$nama',
//     email = '$email',
//     jurusan = '$jurusan',
//     gambar = '$gambar'
//     WHERE id=$id
//     ";

// mysqli_query($conn,$query); 

// return mysqli_affected_rows($conn);/// mengembalikan nilai 0 atau 1 untuk menampilakan pesan kesalahan di tambah.php
// }

// function cari($keyword){

//     $query= "SELECT * FROM mahasiswa WHERE 
//     nama LIKE '%$keyword%' OR
//     nim LIKE '%$keyword%' OR
//     jurusan LIKE '%$keyword%' OR
//     email LIKE '%$keyword%'
//     ";
//     return query($query);
// }

// function registrasi($data){
//     global $conn;

//     $username   = strtolower(stripslashes($data["username"]));
//     $password   = mysqli_real_escape_string($conn,$data["password"]);
//     $password2  = mysqli_real_escape_string($conn,$data["password2"]);
//     ///cek username sudah ada atau belum
//     $result     = mysqli_query($conn,"SELECT username FROM user WHERE username ='$username'");
//     if(mysqli_fetch_assoc($result)){
//         echo "<script>
//             alert('username sudah terdaftar..!')
//             </script>";
//         return false;
//     }
    
//     /// cek konfirmasi password
//     if($password !== $password2){
//         echo "<script> 
//             alert('konfirmasi password tidak sesuai..!');
//         </script>";
//         return false;
//     }
//     /// enkripsi password tanpa md5
//     $password = password_hash($password, PASSWORD_DEFAULT);
//     /// tambahkan userbaru ke data base
//     mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");
    
//     return mysqli_affected_rows($conn);
// }

// ?>
