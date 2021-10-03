<?php 

include '../../../config/koneksi.php';

$id_pelamar_terima = $_POST['id_pelamar_terima'];
$id_pelamar = $_POST['id_pelamar'];
$id_jabatan = $_POST['id_jabatan'];

if ($id_pelamar_terima == null and $id_pelamar == null and $id_jabatan == null) {
	echo "Data Form Harus Disi Semua!!!";
}

mysqli_query($koneksi,"UPDATE tb_terima_pelamar SET id_pelamar_terima ='$id_pelamar_terima', id_pelamar = '$id_pelamar', id_jabatan = '$id_jabatan' WHERE id_pelamar_terima ='$id_pelamar_terima'") or die(mysqli_error($koneksi));

echo "
<script>
alert('Data Berhasil DiUbah');
document.location.href = '../index.php';
</script>";