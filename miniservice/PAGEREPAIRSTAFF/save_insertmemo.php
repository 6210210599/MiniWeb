<?php session_start();
require "../connect_db/config.ini.php";/*
if($_SESSION["position_id"] != '3'){
    echo "<meta http-equiv='refresh'content='0;url=../index.php'>";
}elseif($_SESSION["position_id"] == ''){
    echo "<meta http-equiv='refresh'content='0;url=../index.php'>";
}*/
$datejob = date('Y-m-d');
$memoinsert = mysqli_query($mysqli,"INSERT INTO tblmemo (job_id,status_id,message_memo,date_memo,emp_id) 
VALUES ('".$_POST['select']."','".$_POST['status_id']."','".$_POST['message']."','".$datejob."','".$_SESSION["emp_id"]."')");

    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มสำเร็จ');";
    /*echo "opener.location=opener.location.toString();";*/
    echo "window.close();";
    echo "</script>";
   
?>