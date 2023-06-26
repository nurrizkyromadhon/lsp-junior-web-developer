<?php
include '../config.php';

$id_kegiatan = $_GET['id'];

$query = "DELETE FROM kegiatan where id_kegiatan='$id_kegiatan'";
mysqli_query($koneksi, $query);
header('location:../pages/administrator.php');
?>