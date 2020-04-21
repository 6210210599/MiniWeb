<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connection.php');


//วันที่
date_default_timezone_set('Asia/Bangkok');
$date = date("dmY");

$cusname = "CUS";
$jobname = "JOB";
$cusid = "1";
$jobid = "2";

//เพิ่มไฟล์
$fileupload = $_REQUEST['fileupload'];
$upload=$_FILES['fileupload'];
if($upload <> '') {   //not select file
        
    //โฟลเดอร์ที่จะ upload file เข้าไป 
    $path="fileupload/";  

    //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
    $type = strrchr($_FILES['fileupload']['name'],".");
        /*
    //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
    $newname = $date.$numrand.$type;*/

    $nameimage = $cusname.$cusid.$jobname.$jobid.$date.$type;
    $path_copy=$path.$nameimage;
    $path_link="fileupload/".$nameimage;

    //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
    move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  	
	}
    // เพิ่มไฟล์เข้าไปในตาราง uploadfile

    $sql = "INSERT INTO uploadfile (fileupload) 
    VALUES('$nameimage')";
    
    $result = mysqli_query($mysqli, $sql);
    //close connection
    //mysqli_close($mysqli);

	// javascript แสดงการ upload file
	if($result){
	echo "<script type='text/javascript'>";
    echo "alert('Upload File Succesfuly');";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to upload again');";
	echo "</script>";
}
?>