<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql="DELETE FROM data_diri WHERE idpasien=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Data gagal dihapus.";
}else{
    header("location:profile.php");
}

?>