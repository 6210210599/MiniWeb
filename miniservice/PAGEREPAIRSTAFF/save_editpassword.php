<?php 
require "header.php";
    if($_POST["emppassword"] == $_POST["con"]){
        $saveedit = mysqli_query($mysqli,
        "UPDATE tblemployee SET emp_password = '".$_POST['emppassword']."'
        WHERE emp_id = '".$_SESSION["emp_id"]."' ");
        echo "<script type='text/javascript'>";
		echo "alert('แก้ไขสำเร็จ');";
		echo "window.location = 'editprofile.php'; ";
		echo "</script>";

    }else{
        echo "<script type='text/javascript'>";
		echo "alert('รหัสผ่านไม่ตรงกัน');";
		echo "window.location = 'editpassword.php'; ";
		echo "</script>";
}
?>