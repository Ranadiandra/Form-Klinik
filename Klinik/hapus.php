<?php
include 'koneksi.php';
$kode = $_GET['kode_dokter'];
$hapus = mysqli_query($conn, "DELETE FROM dokter where kode_dokter = $kode");

if($hapus){
    echo "<script>alert('Data berhasil dihapus');
    window.location='tampilan_dokter.php'</script>";
}else{
    echo "<script>alert('Data gagal dihapus);
    window.location='tampilan_dokter.php'</script>";
}
?>