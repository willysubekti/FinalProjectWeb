<?php
include 'connect.php';

$id_berita         = $_POST['id_berita'];
$judul      = $_POST['judul'];
$isi      = $_POST['isi'];

// query SQL untuk insert data
$query="INSERT INTO berita SET `id_berita`='$id_berita',`judul`='$judul',
`isi`='$isi'";
mysqli_query($connect, $query);

header('location:index.php');
?>