<?php
include '../../../config/koneksi.php';
include '../uri.php';

if ($_POST['submit']) {
	
	/// ft_ktp
	$ft_ktp_1 = $_FILES['ft_ktp']['name'];
	$x_1 = explode('.', $ft_ktp_1);
	$ekstensi_1 = strtolower(end($x_1));
	$ukuran_1	= $_FILES['ft_ktp']['size'];
	$file_tmp_1 = $_FILES['ft_ktp']['tmp_name'];
	/// ft_ktp

	/// skck
	$skck_2 = $_FILES['skck']['name'];
	$x_2 = explode('.', $skck_2);
	$ekstensi_2 = strtolower(end($x_2));
	$ukuran_2	= $_FILES['skck']['size'];
	$file_tmp_2 = $_FILES['skck']['tmp_name'];
	/// skck
	
	/// ijazah
	$ijazah_3 = $_FILES['ijazah']['name'];
	$x_3 = explode('.', $ijazah_3);
	$ekstensi_3 = strtolower(end($x_3));
	$ukuran_3	= $_FILES['ijazah']['size'];
	$file_tmp_3 = $_FILES['ijazah']['tmp_name'];
	/// ijazah
	
	/// ft_transkip
	$ft_transkip_4 = $_FILES['ft_transkip']['name'];
	$x_4 = explode('.', $ft_transkip_4);
	$ekstensi_4 = strtolower(end($x_4));
	$ukuran_4	= $_FILES['ft_transkip']['size'];
	$file_tmp_4 = $_FILES['ft_transkip']['tmp_name'];
	/// ft_transkip

	$ekstensi_diperbolehkan = array( "png", "jpg", "jpeg");

	if(in_array($ekstensi_1, $ekstensi_diperbolehkan) && in_array($ekstensi_2, $ekstensi_diperbolehkan) && in_array($ekstensi_3, $ekstensi_diperbolehkan) && in_array($ekstensi_4, $ekstensi_diperbolehkan)) {
		if($ukuran_1 < 1044070 || $ukuran_2 < 1044070 || $ukuran_3 < 1044070 || $ukuran_4 < 1044070){	
			move_uploaded_file($file_tmp_1, '../../../foto/ft_ktp/'.$ft_ktp_1);
			move_uploaded_file($file_tmp_2, '../../../foto/skck/'.$skck_2);
			move_uploaded_file($file_tmp_3, '../../../foto/ijazah/'.$ijazah_3);
			move_uploaded_file($file_tmp_4, '../../../foto/ft_transkip/'.$ft_transkip_4);

			$nama_lengkap = $_POST['nama_lengkap'];
			$alamat = $_POST['alamat'];
			$tmpt_lahir = $_POST['tmpt_lahir'];
			$tanggal_lahir = $_POST['tanggal_lahir'];
			$jenis_kelamin = $_POST['jenis_kelamin'];
			$tamat_sekolah = $_POST['tamat_sekolah'];
			$jurusan = $_POST['jurusan'];
			$no_telp = $_POST['no_telp'];

	//foto
			$ft_ktp = $ft_ktp_1;
			$skck = $skck_2;
			$ijazah = $ijazah_3;
			$ft_transkip = $ft_transkip_4;
			
			if ($nama_lengkap == null and $alamat == null and $tanggal_lahir == null and $jenis_kelamin == null and $tamat_sekolah == null and $jurusan == null and $no_telp = null and $ft_ktp = null and $skck = null and $ijazah = null  and $ft_transkip = null) {
				echo "Data Form Harus Disi Semua!!!";
			}
	//foto

			$data =	mysqli_query($koneksi,"INSERT INTO tb_pelamar VALUES('','$nama_lengkap', '$alamat', '$tmpt_lahir', '$tanggal_lahir', '$jenis_kelamin', '$tamat_sekolah', '$jurusan', '$ft_ktp', '$skck', '$ijazah', '$ft_transkip', '$no_telp')") or die(mysqli_error($koneksi));

			echo "
			<script>
			alert('Data Berhasil DiTambahkan');
			document.location.href = '../index.php';
			</script>";
			
		}else{
			echo 'UKURAN FILE TERLALU BESAR';
		}
	}else{
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
	}
}else{
	echo "Gagal Mengupload Gambar";
}