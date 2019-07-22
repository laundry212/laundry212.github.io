<?php  
require 'functions.php';
$barang = query ("SELECT * FROM barang");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="barang.css">
</head>
<body>

<h1>Barang</h1>

<a href="tambah.php">Tambah Data Barang</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>Kode</th>
		<th>Merek</th>
		<th>Jenis</th>
		<th>Jumlah</th>
		<th>Gambar</th>
		<th>Aksi</th>
	</tr>

	<?php foreach ($barang as $row) :?> 
	<tr>
		<td><?= $row ["kode"]; ?></td>
		<td><?= $row ["merek"]; ?></td>
		<td><?= $row ["jenis"]; ?></td>
		<td><?= $row ["jumlah"]; ?></td>
		<td><img src="<?= $row ["gambar"] ?>" width="50"></td>
		<td>			
			<a href="">ubah</a>
			<a href="hapus.php?kode=<?= $row ["kode"] ?>" onclick="return confirm('yakin?');">hapus</a>
		</td>
	</tr>
<?php endforeach; ?>

</table>
</body>
</html>