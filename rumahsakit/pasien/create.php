
<!DOCTYPE html>
<html>
<head>
    <title>TAMBAH DATA PASIEN</title>
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
	<h1>TAMBAH DATA PASIEN</h1>
	<form action="store.php" method="POST" id="form">
		<label>Nama Pasien:</label>
		<input type="text" name="nama" placeholder="Nama Pasien"><br>
		<label>Penyakit Pasien:</label>
		<input type="text" name="penyakit" placeholder="Penyakit Pasien"><br>
		<label>Nama Dokter:</label>
		<input type="text" name="dokter" placeholder="Nama Dokter"><br>
		<label>No. Registrasi Pasien:</label>
		<input type="number" name="nomor_registrasi" placeholder="Nomor Registrasi Pasien"><br>
		<br>
		<button>Simpan</button>
		<a href="index.php" style="margin-left: 20px;">
			<button type="button">Kembali</button>
		</a>
	</form>
</body>
</html>
 