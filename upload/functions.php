<?php 
//koneksi ke database 
$conn =  mysqli_connect("localhost", "root", "", "vsga");

function query ($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result))
	{
		$rows [] = $row;
	}
	return $rows;
}

function tambah($data)
{
	global $conn;
	$kode = htmlspecialchars($data["kode"]);
	$merek = htmlspecialchars($data["merek"]);
	$jenis = htmlspecialchars($data["jenis"]);
	$jumlah = htmlspecialchars($data["jumlah"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = "INSERT INTO barang values('$kode', '$merek', '$jenis', '$jumlah', '$gambar')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus ($kode)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM barang where kode = $kode");
	return mysqli_affected_rows($conn);
 }

 ?>
