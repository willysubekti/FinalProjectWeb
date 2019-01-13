<?php 
include 'connect.php';
$id = $_GET['id'];
mysqli_query($connect,"DELETE FROM berita WHERE id_berita='$id'")or die(mysqli_error());
 
header('location:edit_berita.php');
?>