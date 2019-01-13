<?php
include 'connect.php';

$id_staf         = $_POST['id_staf'];
$nama_staf      = $_POST['nama_staf'];
$notelp      = $_POST['notelp'];
$alamat      = $_POST['alamat'];
$username      = $_POST['username'];
$password      = $_POST['password'];
// query SQL untuk insert data
$query="UPDATE staf SET `id_staf`='$id_staf',`nama_staf`='$nama_staf',
`notelp`='$notelp',`alamat`='$alamat',`username`='$username',`password`='$password' WHERE id_staf=$id_staf";
mysqli_query($connect,$query);

header('location:edit_staf.php');
?>