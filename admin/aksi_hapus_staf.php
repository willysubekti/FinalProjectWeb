<?php 
include 'connect.php';
$id = $_GET['id'];
mysqli_query($connect,"DELETE FROM staf WHERE id_staf='$id'")or die(mysqli_error());
 
header('location:edit_staf.php');
?>