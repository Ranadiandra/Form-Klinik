<?php
include "koneksi.php";
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
?>
