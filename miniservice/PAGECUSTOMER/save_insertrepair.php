<?php session_start();
require "../connect_db/config.ini.php";
date_default_timezone_set('Asia/Bangkok');

$fileupload = $_REQUEST['fileupload'];
$date = date("dmY-h-i-s");

$cusid = $_SESSION["cus_id"];
$upload=$_FILES['fileupload'];
if($upload <> '') {   //not select file
        
    //โฟลเดอร์ที่จะ upload file เข้าไป 
    $path="../imagejob/";  

    //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
    $type = strrchr($_FILES['fileupload']['name'],".");
    /*
    //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
    $newname = $date.$numrand.$type;*/

    $nameimage = $cusid.$date.$type;
    $path_copy=$path.$nameimage;
    $path_link="../imagejob/".$nameimage;

    //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
    move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  	
	}
    // เพิ่มไฟล์เข้าไปในตาราง uploadfile

    $sql = "INSERT INTO tbljob (cus_id,sn,type_product,product_name,product_model,accessory,symptoms,image,status_id,date_jobstart,date_jobend) 
    VALUES('$cusid','".$_POST['sn']."','".$_POST['type']."','".$_POST['name']."','".$_POST['model']."','".$_POST['acc']."','".$_POST['sym']."','$nameimage','1',NOW(),'0000-00-00 00:00:00')";
    
    $result = mysqli_query($mysqli, $sql);
    //close connection
    //mysqli_close($mysqli);

	// javascript แสดงการ upload file/*
	if($result){
	echo "<script type='text/javascript'>";
    echo "alert('Upload File Succesfuly');";
    echo "window.location = 'index.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to upload again');";
	echo "</script>";
}
?>