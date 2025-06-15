<?php
include '../koneksi.php';
$no_pasien = $_GET['no_pasien'];
$hapus = mysqli_query($conn, "DELETE FROM pasien where no_pasien = '$no_pasien'");
if($hapus){
    echo "<script>alert('Data berhasil dihapus');
    window.location='tampilan_pasien.php'</script>";
}else{
    echo "<script>alert('Data gagal dihapus);
    window.location='tampilan_pasien.php'</script>";
}
?>