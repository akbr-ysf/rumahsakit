<?php

$dbhost = 'localhost';
$dbuser	= 'root';
$dbpass	= '';
$dbname	= 'rumahsakit';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error){
	die('Koneksi Gagal: '.$conn->connect_error);
} else {
	//echo "Koneksi Berhasil"."<br>";
}