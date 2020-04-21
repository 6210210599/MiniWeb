<?php 
    require "../../connect_db/config.ini.php";
    if($_FILES['fileUpload']['name'] == ""){
    $saveedit1 = mysqli_query($mysqli,
    "UPDATE tblvideo SET video_name = '".$_POST['Name']."', video_description = '".$_POST['Des']."'
    where video_id = '".$_POST['select']."'");
    echo "<script type='text/javascript'>";
    echo "alert('แก้ไขสำเร็จ');";
    echo "opener.location=opener.location.toString();";
    echo " window.close(); ";
    echo "</script>";
    }else{
    $video = mysqli_query($mysqli,"SELECT * FROM tblvideo Where video_id = '".$_POST['select']."'");
    $videorow = $video->fetch_assoc();
    $url1 = $videorow['url'];
    $addressfile = "../../video/".$url1;
    @unlink($addressfile);
    
    
    
    move_uploaded_file($_FILES["fileUpload"]["tmp_name"],"../../video/".$_FILES["fileUpload"]["name"]);
    $url = $_FILES["fileUpload"]["name"];
   

    $saveedit2 = mysqli_query($mysqli,
    "UPDATE tblvideo SET video_name = '".$_POST['Name']."', video_description = '".$_POST['Des']."', url = '".$url."'
    where video_id = '".$_POST['select']."'");
    
    echo "<script type='text/javascript'>";
    echo "alert('แก้ไขสำเร็จ');";
    echo "opener.location=opener.location.toString();";
    echo " window.close(); ";
    echo "</script>";
    }

?>