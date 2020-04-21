<?php 
require "../connect_db/config.ini.php";
$jobid = $_GET["txt_id"];
$job = mysqli_query($mysqli,
		"SELECT * FROM tbltransferslip WHERE job_id = '".$jobid."'");
	while($jobrow = $job->fetch_assoc()){
        $image = $jobrow["transfer_slip"];
	}
    if($image != ""){
        echo "<center>"."<img src='../imageslip/".$image."' width='85%'>";
    }else{
    echo "<script type='text/javascript'>";
    echo "alert('ยังไม่ได้ส่งหลักฐานการโอน');";
    echo " window.close(); ";
    echo "</script>";
    }
?>