<?php 

require '../functions.php';
$id = $_GET['id'];
$sql = "SELECT * FROM data_pasien WHERE `id`='$id'";

$sql = mysqli_query($conn, $sql) or die(mysqli_error($conn));

$menu = mysqli_fetch_assoc($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA PASIEN</title>
	<style>
 		body {
 			font-family: calibri;
 		}
 		h1 {
 			text-align: center;
 		}
 		form {
 			margin-left:auto;
 			margin-right: auto;
 		}   
 		input {
 			display: block;
 		}
 		#form {
 			border-radius: 25px;
		    border: 2px solid #63fD50;
		    padding: 20px; 
		    width: 200px;
		    height: 300px; 
 		}
    </style>
</head>
<body>
	<h1>EDIT DATA PASIEN</h1>
	<form action="update.php?id=<?= $menu['id'] ?>" method="POST" id="form">
		<label>Nama Pasien:</label>
		<input type="text" name="nama" placeholder="Nama Pasien" value="<?= $menu['nama'] ?>"><br>
		<label>Penyakit Pasien:</label>
		<input type="text" name="penyakit" placeholder="Penyakit Pasien" value="<?= $menu['penyakit'] ?>"><br>
		<label>Nama Dokter:</label>
		<input type="text" name="dokter" placeholder="Nama Dokter" value="<?= $menu['dokter'] ?>"><br>
		<label>No. Registrasi Pasien:</label>
		<input type="number" name="nomor_registrasi" placeholder="Nomor Registrasi" value="<?= $menu['nomor_registrasi'] ?>"><br>
		<button>Update</button>
		<a href="index.php" style="margin-left: 20px;">
			<button type="button">Kembali</button>
		</a>
	</form>
</body>
</html>