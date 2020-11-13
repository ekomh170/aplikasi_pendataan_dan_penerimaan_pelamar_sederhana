<?php 
session_start();

session_destroy();

echo "
	<script>
	alert('Anda Telah Keluar Dari Sesi Login');
	document.location.href = '../login.php';
	</script>";
?>