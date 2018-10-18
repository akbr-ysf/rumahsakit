<?php

require '../functions.php';

$id = $_GET['id'];

$sql = "DELETE FROM `data_pasien` WHERE `id`='$id'";

mysqli_query($conn, $sql) or die(mysqli_error($conn));

header('Location: index.php');