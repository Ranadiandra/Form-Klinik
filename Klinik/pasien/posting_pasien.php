<?php
include "../koneksi.php";
$no_pasien = $_POST['no_pasien'];
$nama_pasien = $_POST['nama_pasien'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
$kode_dokter = $_POST['kode_dokter'];

$posting = mysqli_query($conn, "INSERT INTO pasien values ('$no_pasien', '$nama_pasien', '$alamat', '$hp', '$kode_dokter')");
if($posting){
    echo "<script>alert('Data pasien berhasil disimpan');
    window.location='tampilan_pasien.php'</script>";
}else{
    echo "<script>alert('Data pasien gagal disimpan');
    window.location='tampilan_pasien.php'</script>";
}
?>