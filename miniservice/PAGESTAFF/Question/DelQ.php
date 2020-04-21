<?php 
    require "../../connect_db/config.ini.php";
    $DElQ = mysqli_query($mysqli,"DELETE FROM tblquestion WHERE question_id = '".$_POST['select']."'");
    echo "<script type='text/javascript'>";
    echo "alert('ลบสำเร็จ');";
    echo "window.location = '../question.php'; ";
    echo "</script>";
?>