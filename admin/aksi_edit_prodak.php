<?php
include 'connect.php';

	$gambar = rand(1000,100000)."-".$_FILES['gambar']['name'];
	$lokasi = $_FILES['gambar']['tmp_name'];
	$folder="images/";
	move_uploaded_file($lokasi,$folder.$gambar);


$id_prodak         = $_POST['id_prodak'];
//$gambar     = $_POST['gambar'];
$nama_prodak      = $_POST['nama_prodak'];
$keterangan      = $_POST['keterangan'];

// query SQL untuk insert data
$query="UPDATE prodak SET `id_prodak`=$id_prodak,`nama_prodak`='$nama_prodak',`gambar`='$gambar',
`keterangan`='$keterangan' WHERE id_prodak=$id_prodak";
mysqli_query($connect,$query);

header('location:edit_prodak.php');
?>