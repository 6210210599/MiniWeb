<?php session_start();
require "../connect_db/config.ini.php";
$datejob = date('Y-m-d');
if(isset($_POST['stt5'])){
    $savestt5 = mysqli_query($mysqli,
    "UPDATE tbljob SET status_id = '5'
    WHERE job_id = '".$_POST['stt5s']."' ");
    $stt5insert = mysqli_query($mysqli,
    "INSERT INTO tbljobstatus (job_id,status_id,emp_id,date) 
    VALUES ('".$_POST['stt5s']."','5','".$_SESSION["emp_id"]."','".$datejob."')");
    if($savestt5) {
        echo "<script type='text/javascript'>";
        echo "alert('เปลี่ยนสถานะงานเป็น !!ตรวจสอบอาการ!! แล้ว');";
        echo "window.location = 'index.php'; ";
        echo "</script>";
    }
}elseif(isset($_POST['stt6'])){
    $savestt6 = mysqli_query($mysqli,
    "UPDATE tbljob SET status_id = '6'
    WHERE job_id = '".$_POST['stt6s']."' ");
    $stt6insert = mysqli_query($mysqli,
    "INSERT INTO tbljobstatus (job_id,status_id,emp_id,date) 
    VALUES ('".$_POST['stt6s']."','6','".$_SESSION["emp_id"]."','".$datejob."')");
    if($stt6insert) {
        echo "<script type='text/javascript'>";
        echo "alert('เปลี่ยนสถานะงานเป็น !!เสนอราคา!! แล้ว');";
        echo "window.location = 'index.php'; ";
        echo "</script>";
    }
}elseif(isset($_POST['stt8'])){
    $savestt8 = mysqli_query($mysqli,
    "UPDATE tbljob SET status_id = '8'
    WHERE job_id = '".$_POST['stt8s']."' ");
    $stt8insert = mysqli_query($mysqli,
    "INSERT INTO tbljobstatus (job_id,status_id,emp_id,date) 
    VALUES ('".$_POST['stt8s']."','8','".$_SESSION["emp_id"]."','".$datejob."')");
    if($stt8insert) {
        echo "<script type='text/javascript'>";
        echo "alert('เปลี่ยนสถานะงานเป็น !!ดำเนินการซ่อม!! แล้ว');";
        echo "window.location = 'index.php'; ";
        echo "</script>";
    }
}elseif(isset($_POST['stt9'])){
    $savestt9 = mysqli_query($mysqli,
    "UPDATE tbljob SET status_id = '9'
    WHERE job_id = '".$_POST['stt9s']."' ");
    $stt9insert = mysqli_query($mysqli,
    "INSERT INTO tbljobstatus (job_id,status_id,emp_id,date) 
    VALUES ('".$_POST['stt9s']."','9','".$_SESSION["emp_id"]."','".$datejob."')");
    if($stt9insert) {
        echo "<script type='text/javascript'>";
        echo "alert('เปลี่ยนสถานะงานเป็น !!จบงานซ่อม!! แล้ว');";
        echo "window.location = 'index.php'; ";
        echo "</script>";
    }
}
?>