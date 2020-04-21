<?php 
    require "../../connect_db/config.ini.php";
    $dateQ = date('Y-m-d');
    $Qinsert = mysqli_query($mysqli,"INSERT INTO tblquestion (question,details,questiondate) 
VALUES ('".$_POST['Q']."','".$_POST['A']."','".$dateQ."')");
echo "<script type='text/javascript'>";
echo "alert('เพิ่มสำเร็จ');";
echo "opener.location=opener.location.toString();";
echo "window.close();";
echo "</script>";
?>