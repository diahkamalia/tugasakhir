<?php
$host = "localhost";
$user ="root";
$password ="";
$dbname ="tugasakhir";

$koneksi = mysqli_connect($host,$user,$password,$dbname);
if(!$koneksi){
    echo "Koneksi Gagal";
}
?>