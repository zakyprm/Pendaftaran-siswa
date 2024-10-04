<?php 
include("config.php");
// Check whether the save button is clicked or not
if (isset($_POST["simpan"])) {
    // Take the data from formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];
    // Create an Update query
    $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah' WHERE id=$id";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        // If successful, redirect to the list-siswa.php page
        header('Location: list-siswa.php');
    } else {
        // If it fails display a message
        die ('Gagal Menyimpan perubahan');
    }
} else {
    die ('Akses dilarang...');
}
?>