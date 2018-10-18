<?php

$conn = new mysqli('localhost', 'root', '', 'rumahsakit');
$data = mysqli_query($conn, "select * from data_pasien");
?>

<!DOCTYPE html>
<html>
<head>
    <title>DATA PASIEN</title>
    <style>
    	body {
    		font-family: calibri;
    	}
    	h1 {
    		text-align: center;
    	}
    	table {
    		border: double;
    		margin-left: auto;
    		margin-right: auto;
    	}
    	th, td {
    		border: double;
    		text-align: center;
    		padding-left: 50px;
    		padding-right:50px;
    		margin-left: 10px;
    	}
    </style>
</head >
<body>
	<h1>DATA PASIEN</h1>
    <table>
        <tr>
            <th>ID</th> 
        	<th>NAMA</th> 
        	<th>PENYAKIT</th> 
        	<th>DOKTER</th>
        	<th>No. REGISTRASI</th> 
        	<th>AKSI</th>
    	</tr>
    	<?php 

	    require '../functions.php';
    	$sql = "SELECT * FROM data_pasien";
    	$bunch_of_data = mysqli_query($conn, $sql) or die(mysqli_error($conn));

	    while($data = mysqli_fetch_assoc($bunch_of_data)){
    	?>
    	<tr> 
        	<td><?= $data['id']; ?></td> 
        	<td><?= $data['nama']; ?></td> 
        	<td><?= $data['penyakit']; ?></td> 
        	<td><?= $data['dokter']; ?></td> 
        	<td><?= $data['nomor_registrasi']; ?></td> 
        	<td>
            	<a href="edit.php?id=<?= $data['id']; ?>">Edit</a>
            	<a href="delete.php?id=<?= $data['id']; ?>">Delete</a>
        	</td> 
    	</tr>
    	<?php 
    	}
    	?>
	</table><br>
    <a href="create.php" style="margin-left: 113px;">
        <button>Tambah</button>
    </a>
    <a href="../index.php" style="margin-left: 20px;">
        <button>Kembali</button>
    </a>
</body>
</html>