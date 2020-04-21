<?php session_start();
require "../connect_db/config.ini.php";
$datejob = date('Y-m-d');
if(isset($_POST['stt5'])){
    $savestt5 = mysqli_query($mysqli,
    "UPDATE tbljob SET status_id = '7'
    WHERE job_id = '".$_POST['stt5s']."' ");
    if($savestt5) {
        echo "<script type='text/javascript'>";
        echo "alert('เปลี่ยนสถานะงานเป็น !!ยืนยันการเสนอราคา!! แล้ว');";
        echo "window.location = 'index.php'; ";
        echo "</script>";
    }
}
?>