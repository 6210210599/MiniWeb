<?php 
require "header.php";
    $saveedit = mysqli_query($mysqli,
    "UPDATE tblemployee SET emp_phoneno = '".$_POST['phone']."', emp_email = '".$_POST['email']."'
        WHERE emp_id = '".$_SESSION["emp_id"]."' ");

    if($saveedit) {
        echo "<script type='text/javascript'>";
		echo "alert('แก้ไขสำเร็จ');";
		echo "window.location = 'editprofile.php'; ";
		echo "</script>";
       }
?>