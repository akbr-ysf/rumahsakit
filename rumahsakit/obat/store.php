<?php
require "../functions.php";

$nama_obat = $_POST['nama_obat'];
$dosis = $_POST['dosis'];
$harga = $_POST['harga'];
$pasien_id = $_POST['pasien_id'];

$sql = "INSERT INTO data_obat (`nama_obat`, `dosis`, `harga`, `pasien_id`) VALUES('$nama_obat', '$dosis', '$harga', '$pasien_id')";

mysqli_query($conn, $sql) or die(mysqli_error($conn));

header('Location: index.php');