<?php 
    require "../../connect_db/config.ini.php";
    //โฟลเดอร์ที่จะ upload file เข้าไป 
    move_uploaded_file($_FILES["fileUpload"]["tmp_name"],"../../video/".$_FILES["fileUpload"]["name"]);
    $url = $_FILES["fileUpload"]["name"];
    $Vinsert = mysqli_query($mysqli,"INSERT INTO tblvideo (video_name,video_description,url) 
VALUES ('".$_POST['N']."','".$_POST['D']."','".$url."')");

    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มสำเร็จ');";
    echo "opener.location=opener.location.toString();";
    echo "window.close();";
    echo "</script>";
?>