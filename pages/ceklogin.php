<?php 

//koneksi ke database
include '../connect.php';
 
//mengambil data dari form
$username    = $_POST['username'];
$password    = $_POST['password'];


//cek username dan password dari database
$login = mysqli_query($connect, "SELECT * FROM staf WHERE username = '$username' AND password='$password'");
$row=mysqli_fetch_array($login);

//Cek adanya username dan password di database dilanjutkan 
//dengan membuat session
if ($row['username'] == $username AND $row['password'] == $password)
{
  session_start(); 
  $_SESSION['username'] = $row['username'];
  $_SESSION['password'] = $row['password'];

  header('location:../admin/index.php');
}
else
{
  echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br>
        Username atau Password Anda tidak benar.<br>";
    echo "<br>";
  echo "<input class='btn btn-blue' type=button value='ULANGI LAGI' onclick=location.href='form.php'></a></center>";
}
?>