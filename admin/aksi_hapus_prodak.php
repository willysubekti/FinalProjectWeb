<?php 
include 'connect.php';
$id = $_GET['id'];
mysqli_query($connect,"DELETE FROM prodak WHERE id_prodak='$id'")or die(mysqli_error());
 
header('location:edit_prodak.php');
?>