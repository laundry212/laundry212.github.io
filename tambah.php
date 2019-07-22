<?php 
require 'functions.php';

// cek apakah tomboh submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) 
{
	// cek apakah data berhasil di tambahkan atau tidak
	if (tambah($_POST) > 0) 
	{
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
			";
	}

	else
	{
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
			";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Barang</title>
	<link rel="stylesheet" type="text/css" href="barang.css">
</head>
<body>
<h1 align="center">Tambah Data Barang</h1>


<form action="" method="post">
	<ul>
		<!-- <li> -->
			<label for="kode">Kode :</label>
			<input type="" name="kode" id="kode" required><br>
		<!-- 	</li> -->
		<!-- <li> -->
			<label for="merek">Merek :</label>
			<input type="" name="merek" id="merek"><br>
		<!-- </li> -->
		<!-- 	<li> -->
			<label for="jenis">Jenis :</label>
			<input type="" name="jenis" id="jenis"><br>
		<!-- </li> -->
		<!-- <li> -->
			<label for="jumlah">Jumlah :</label>
			<input type="" name="jumlah" id="jumlah"><br>
		<!-- </li> -->
		<!-- <li> -->
			<label for="gambar">Gambar :</label>
			<input type="file" name="gambar" id="gambar"><br>
		<!-- </li> -->
		<br><br>
		<!-- <li> -->
			<button type="submit" name="submit">simpan</button>
		<!-- </li>
 -->	</ul>
	
</form>

</body>
</html>