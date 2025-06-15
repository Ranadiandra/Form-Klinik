<?php
include "../../koneksi.php";

session_start();
if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
    die("ANDA BELUM LOGIN, SILAHKAN LOGIN <a href='../../index.php'>DI SINI</a> UNTUK MELIHAT DATA");
    // header("location:../../index.php");  bisa juga pake ini
}
else{

$kode = $_POST['kode_dokter'];
$nama = $_POST['nama_dokter'];
$poli = $_POST['poli'];

$posting = mysqli_query($conn, "INSERT INTO dokter VALUES ('$kode', '$nama', '$poli')");
if($posting){
    echo "<script>alert('Data berhasil disimpan');
    window.location='tampilan_dokter.php'</script>";
}else{
    echo "<script>alert('Data gagal disimpan);
    window.location='tampilan_dokter.php'</script>";
}
}
?>
