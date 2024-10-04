<?php
include("config.php");

// Check whether the registration button has been clicked or not
if(isset($_POST["daftar"])){
    // Take a data from formulir
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $jk = $_POST["jenis_kelamin"];
    $agama = $_POST["agama"];
    $sekolah = $_POST["sekolah_asal"];

    // Create a query
    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    //whether the query was saved succsessfully
    if( $query ) {
        header('Location: index.php?status=sukses');
    }
    else {
        header('Location: index.php?status=gagal');
        }
    }else {
    die('Akses dilarang');
}
?>