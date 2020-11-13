<?php 

include '../../config/koneksi.php';

$email = $_POST['eml'];
$password = md5($_POST['pw']);

$query = mysqli_query($koneksi, "SELECT * FROM tb_akun WHERE email = '$email' AND password = '$password'");
$cek_baris = mysqli_num_rows($query);
$row = mysqli_fetch_assoc($query);

if ($cek_baris) {
	if ($row['role'] == "HRD" || $row['role'] == "Kepala HRD") {
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;	
		$_SESSION['role'] = $row['role'];	
		echo "
		<script>
		alert('Selamat Datang! Login Berhasil:)');
		document.location.href = '../../system/tampilan/index.php';
		</script>";
	}elseif (!$row['role']) {
		echo "<script>
		alert('Login Gagal Role Tidak Ada');
		document.location.href = '../login.php';
		</script>";		
	}
} elseif (!$cek_baris) {
	echo "
	<script>
	alert('Login Gagal Password dan Nama Pangglan Tidak Sesuai');
	document.location.href = '../login.php';
	</script>";
}

?>