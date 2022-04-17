<?php
include "koneksi.php";
$id = $_POST['idpasien'];
$nama = $_POST['name'];
$age = $_POST['usia'];
$keluh = $_POST['complaint'];
$konsul = $_POST['konsultasi'];
$med = $_POST['medicine'];
$nohape = $_POST['nohp'];

$sql = "UPDATE data_diri set  name='$nama', usia='$age', complaint='$keluh', konsultasi='$konsul', medicine='$med', nohp='$nohape' where idpasien=$id";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Update gagal.";
}else{
    header("location:profile.php");
}

?>