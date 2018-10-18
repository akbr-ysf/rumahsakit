<?php
require "../functions.php";

$nama = $_POST['nama'];
$penyakit = $_POST['penyakit'];
$dokter = $_POST['dokter'];
$nomor_registrasi = $_POST['nomor_registrasi'];

$sql = "INSERT INTO data_pasien (`nama`, `penyakit`, `dokter`, `nomor_registrasi`) VALUES('$nama', '$penyakit', '$dokter', '$nomor_registrasi')";

mysqli_query($conn, $sql) or die(mysqli_error($conn));

header('Location: index.php');