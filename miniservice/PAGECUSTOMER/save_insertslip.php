<?php 
    require "../connect_db/config.ini.php";
    move_uploaded_file($_FILES["fileUpload"]["tmp_name"],"../imageslip/".$_FILES["fileUpload"]["name"]);
    $url = $_FILES["fileUpload"]["name"];

    $slipinsert = mysqli_query($mysqli,"INSERT INTO tbltransferslip (job_id,transfer_slip) 
    VALUES ('".$_POST['jobid']."','".$url."')");

    echo "<script type='text/javascript'>";
    echo "alert('ดำเนินการเรียบร้อย');";
    echo "window.close();";
    echo "</script>";
?>