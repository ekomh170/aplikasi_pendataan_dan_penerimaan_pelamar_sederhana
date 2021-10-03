<?php 

if ($_POST['submit']) {
	
	include '../../../config/koneksi.php';
	$nama_jabatan = $_POST['nama_jabatan'];

	if ($nama_jabatan == null) {
		echo "Form Harus Di isi!!";
	}
	
	mysqli_query($koneksi,"INSERT INTO tb_jabatan VALUES('','$nama_jabatan')") or die(mysqli_error($koneksi));
	
	echo "
	<script>
	alert('Data Berhasil DiTambahkan');
	document.location.href = '../index.php';
	</script>";

}