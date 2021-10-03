<?php 

if ($_POST['submit']) {

	include '../../../config/koneksi.php';

	$id_jabatan = $_POST['id_jabatan'];
	$nama_jabatan = $_POST['nama_jabatan'];

	if ($id_jabatan = null and $nama_jabatan == null) {
		echo "Form Harus Di isi!!";
	}

	mysqli_query($koneksi,"UPDATE tb_jabatan SET id_jabatan ='$id_jabatan', nama_jabatan='$nama_jabatan' WHERE id_jabatan='$id_jabatan'");

	echo "
	<script>
	alert('Data Berhasil DiUbah');
	document.location.href = '../index.php';
	</script>";

}

?>