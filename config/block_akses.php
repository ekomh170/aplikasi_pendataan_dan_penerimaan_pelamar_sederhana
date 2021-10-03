<?php
@session_start();
 
if(isset($_SESSION['email'])){
	if (isset($_SESSION['role'])) {
		echo '<script language="javascript">alert("Anda Sudah Login :)"); document.location="../system/tampilan/index.php";</script>';
	}
}
?>