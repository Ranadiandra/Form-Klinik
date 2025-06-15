<!-- untuk menyimpan hasil ubah pada tampilan form -->
<?php
 include "../koneksi.php";
 $no_pasien = $_POST['no_pasien'];
 $nama = $_POST['nama_pasien'];
 $alamat = $_POST['alamat'];
 $hp = $_POST['hp'];
 $kode_dokter = $_POST['kode_dokter'];

$ubah = mysqli_query($conn, "UPDATE pasien SET nama_pasien = '$nama', alamat = '$alamat', hp = '$hp', kode_dokter = '$kode_dokter' WHERE no_pasien = '$no_pasien'"); 
 if($ubah){
     echo "<script>alert('Data berhasil diubah');
     window.location='tampilan_pasien.php'</script>";
 }else{
     echo "<script>alert('Data gagal diubah);
     window.location='tampilan_pasien.php'</script>";
 }
 ?>