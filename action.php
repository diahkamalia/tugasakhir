<?php
include "koneksi.php";

$nama = $_POST['name'];
$age = $_POST['usia'];
$keluh = $_POST['complaint'];
$konsul = $_POST['konsultasi'];
$med = $_POST['medicine'];
$nohape = $_POST['nohp'];

$sql = "INSERT INTO data_diri VALUES(null,'$nama','$age','$keluh','$konsul','$med','$nohape')";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Gagal tambah data.";
}else{
    header("location:profile.php");
}

?>