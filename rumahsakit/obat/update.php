<?php
require '../functions.php';

$id = $_GET['id'];
$nama_obat = $_POST['nama_obat'];
$dosis = $_POST['dosis'];
$harga = $_POST['harga'];
$pasien_id = $_POST['pasien_id'];

$sql = "UPDATE `data_obat` SET `nama_obat`='$nama_obat', `dosis`='$dosis', `harga`='$harga', `pasien_id`='$pasien_id' where `id`='$id'";

mysqli_query($conn, $sql) or die(mysqli_error($conn));

header('Location: index.php');