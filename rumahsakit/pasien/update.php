<?php
require '../functions.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$penyakit = $_POST['penyakit'];
$dokter = $_POST['dokter'];
$nomor_registrasi = $_POST['nomor_registrasi'];

$sql = "UPDATE `data_pasien` SET `nama`='$nama', `penyakit`='$penyakit', `dokter`='$dokter', `nomor_registrasi`='$nomor_registrasi' where `id`='$id'";

mysqli_query($conn, $sql) or die(mysqli_error($conn));

header('Location: index.php');