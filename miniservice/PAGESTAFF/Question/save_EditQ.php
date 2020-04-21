<?php 
    require "../../connect_db/config.ini.php";
    $saveedit = mysqli_query($mysqli,
    "UPDATE tblquestion SET question = '".$_POST['Q']."', details = '".$_POST['A']."' 
    where question_id = '".$_POST['select']."'");
    if($saveedit) {
        echo "<script type='text/javascript'>";
        echo "alert('แก้ไขสำเร็จ');";
        echo "opener.location=opener.location.toString();";
		echo " window.close(); ";
		echo "</script>";
       }
?>