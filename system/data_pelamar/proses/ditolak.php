<?php 
include '../../../config/koneksi.php';

if ($_GET['id']) {
	
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM tb_pelamar where id_pelamar='$id'");
	$row = mysqli_fetch_assoc($data);

	$id_pelamar = $row['id_pelamar'];
	$id_jabatan = 1;

	$tsp = mysqli_query($koneksi, "SELECT * FROM tb_tolak_pelamar where id_pelamar='$id' ");
	$d = mysqli_fetch_array($tsp);
	$ls = $d['id_pelamar'] == $id_pelamar;

	if ($d['id_pelamar'] == $id_pelamar) {
		echo "
		<script>
		alert('Data Sudah Ada!!');
		document.location.href = '../index.php';
		</script>";
		die;
	}

	$data =	mysqli_query($koneksi,"INSERT INTO tb_tolak_pelamar VALUES('','$id_pelamar', '$id_jabatan')") or die(mysqli_error($koneksi));
	
	echo "
	<script>
	alert('Data Berhasil Ditolak');
	document.location.href = '../../data_pelamar_ditolak/index.php';
	</script>";

}

?>