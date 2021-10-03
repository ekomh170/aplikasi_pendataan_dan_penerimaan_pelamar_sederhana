<?php
@session_start();
 
if(!isset($_SESSION['email'])){
	if (!isset($_SESSION['role'])) {
		echo '<script language="javascript">alert("Anda Harus Login!!"); document.location="../../auth/login.php";</script>';
	}
}
?>