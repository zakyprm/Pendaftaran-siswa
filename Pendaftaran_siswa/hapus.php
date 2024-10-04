<?php
include("config.php");

if(isset($_GET["id"])){
    //Take id from query string
    $id = $_GET["id"];

    //Create delete query
    $sql = "DELETE FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);

    //Check whether the query is successful or not
    if($query) {
        header("Location: list-siswa.php");
    } else {
        die("Gagal menghapus...");
    }

 } else {
    die("Akses dilarang...");
 }

?>