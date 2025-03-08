<!-- untuk menyimpan hasil ubah pada tampilan form -->
 <?php
 include "koneksi.php";
 $kode = $_POST['kode_dokter'];
 $nama = $_POST['nama_dokter'];
 $poli = $_POST['poli'];

$ubah = mysqli_query($conn, "UPDATE dokter SET nama_dokter = '$nama', poli = '$poli' WHERE kode_dokter = '$kode'"); 
 if($ubah){
     echo "<script>alert('Data berhasil diubah');
     window.location='tampilan_dokter.php'</script>";
 }else{
     echo "<script>alert('Data gagal diubah);
     window.location='tampilan_dokter.php'</script>";
 }
 ?>