<?php
include '../../config/koneksi.php';
include '../../config/email_validasi.php';


$data = mysqli_query($koneksi, "SELECT * FROM tb_akun");
$jumlah = mysqli_num_rows($data);
$akun = $jumlah + 1;

$id_akun = "0" . $akun;
$email = $_POST['eml'];
$data_pass = $_POST['pw'];
$role = $_POST['rl'];
$password = md5($data_pass);

$cek_data = [$id_akun, $email, $data_pass, $role];

if ($cek_data = null) {
	echo "<script>
	alert('Data Tidak Ada');
	document.location.href = '../register.php';
	</script>";
	die;
} else {
	$data = mysqli_query($koneksi,"INSERT INTO tb_akun VALUES('$id_akun', '$email', '$password', '$role')") or die (mysqli_error($koneksi));
}

echo "<script>
alert('Akun Berhasil Di Buat');
document.location.href = '../login.php';
</script>";

?>