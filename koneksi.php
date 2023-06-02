<?php

$host = "127.0.0.1:3307";
$user = "root";
$password = "";
$database = "pengunjung";

$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
} 
// else {
//     echo "kenekk databaseku";
// }
  
?>
