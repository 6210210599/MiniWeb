<?php 
    require "../../connect_db/config.ini.php";
    $video = mysqli_query($mysqli,
        "SELECT * FROM tblvideo Where video_id = '".$_POST['select']."'");
    $videorow = $video->fetch_assoc();
    $url = $videorow['url'];
    $addressfile = "../../video/".$url;
    @unlink($addressfile);
    $DelV = mysqli_query($mysqli,"DELETE FROM tblvideo WHERE video_id = '".$_POST['select']."'");
    echo "<script type='text/javascript'>";
    echo "alert('ลบสำเร็จ');";
    echo "window.location = '../video.php'; ";
    echo "</script>";
?>