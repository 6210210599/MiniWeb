<?php session_start();
require "../connect_db/config.ini.php";/*
if($_SESSION["position_id"] != '3'){
    echo "<meta http-equiv='refresh'content='0;url=../index.php'>";
}elseif($_SESSION["position_id"] == ''){
    echo "<meta http-equiv='refresh'content='0;url=../index.php'>";
}*/

$costinsert = mysqli_query($mysqli,
"INSERT INTO tbljobcost (job_id,list,cost) 
VALUES ('".$_POST['select']."','".$_POST['list']."','".$_POST['cost']."')");

    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มสำเร็จ');";
    /*echo "opener.location=opener.location.toString();";*/
    echo "window.close();";
    echo "</script>";
   
?>