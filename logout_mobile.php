<?php 
$hostname = "localhost";
$user = "root";
$pass = "";
$database = "agenda"; //sesuaikan dengan password MySQL kalian
//create variable connectin
$kominfo = mysqli_connect($hostname, $user, $pass, $database);
//checking connection
if(!$kominfo)
  {

    echo "Koneksi Gagal! : " . mysqli_connect_error();

  }else{

    //echo "Koneksi Berhasil!";

  }



// mengaktifkan session pada php
session_start();

$username = $_SESSION['agenda_username'];

mysqli_query($kominfo,"update user set online ='0' where username='$username'");   
// menghapus semua session
session_destroy();

// mengalihkan halaman ke halaman login
header("location:logout.php");
?>