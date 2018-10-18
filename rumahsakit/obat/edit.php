<?php 

require '../functions.php';
$id = $_GET['id'];
$sql = "SELECT * FROM data_obat WHERE `id`='$id'";

$sql = mysqli_query($conn, $sql) or die(mysqli_error($conn));

$menu = mysqli_fetch_assoc($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA OBAT</title>
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
		    border: 2px solid #ff0000;
		    padding: 20px; 
		    width: 200px;
		    height: 300px; 
 		}   
    </style>
</head>
<body>
	<h1>EDIT DATA OBAT</h1>
	<form action="update.php?id=<?= $menu['id'] ?>" method="POST" id="form">
		<label>Nama Obat:</label>
		<input type="text" name="nama_obat" placeholder="Nama Obat" value="<?= $menu['nama_obat'] ?>"><br>
		<label>Dosis Obat:</label>
		<input type="text" name="dosis" placeholder="Dosis Obat" value="<?= $menu['dosis'] ?>"><br>
		<label>Harga Obat:</label>
		<input type="text" name="harga" placeholder="Harga Obat" value="<?= $menu['harga'] ?>"><br>
		<label>ID Pasien:</label>
		<select name="pasien_id" id="pasien_id">
			<option value="">-- Pilih --</option>
			<?php 
				$sql = "SELECT * FROM `data_pasien`";
				$menus = mysqli_query($conn, $sql) or die(mysqli_error($conn));
				while($menu = mysqli_fetch_assoc($menus)){
			?>
			<option value="<?= $menu['id'] ?>"><?= $menu['nama'] ?></option>
			<?php 
				}
			?>
		</select><br><br>
		<button>Update</button>
		<a href="index.php">
			<button>Kembali</button>
		</a>
	</form>
</body>
</html>