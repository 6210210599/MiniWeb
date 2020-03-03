<?php
	if(@$_SESSION['sess_status'] == "")
	{
	echo "<script>";  
	echo "alert( 'กรุณาเข้าสู่ระบบ' );";
	echo "</script>";
		exit();
	}
?>