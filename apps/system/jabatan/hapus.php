<?php 
include '../../config/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_jabatan WHERE id_jabatan='$id'")or die(mysqli_error($koneksi));

echo "
<script>
alert('Data Berhasil Dihapus');
document.location.href = 'index.php';
</script>";
?>