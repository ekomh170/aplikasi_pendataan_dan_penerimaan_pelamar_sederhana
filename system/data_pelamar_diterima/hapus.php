<?php 
include '../../config/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_terima_pelamar WHERE id_pelamar_terima='$id'")or die(mysqli_error($koneksi));

echo "
<script>
alert('Data Berhasil Dihapus');
document.location.href = 'index.php';
</script>";

?>