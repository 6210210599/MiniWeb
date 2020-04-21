<?php 
require "../../connect_db/config.ini.php";
$video = mysqli_query($mysqli,
        "SELECT * FROM tblvideo Where video_id = '".$_GET["txt_id"]."'");
?>
<table border="0" style="width: 80%">
    <tbody>
        <?php 
        $videorow = $video->fetch_assoc();
        $url = $videorow['url'];
        echo "<tr><td colspan=2><h1>เรื่อง : ".$videorow["video_name"]."</h1></td></tr>";
        echo "<tr><td><hr /></td></tr>";
        echo "<tr><td><h3>คำอธิบาย : </h3>".$videorow['video_description']."</td></tr>";
        echo "<tr><td><hr /></td></tr>";
        ?>
    </tbody>
</table><center>
<video width="700" controls>
  <source src="../../video/<?php echo $videorow['url']; ?>" type="video/mp4">
  Your browser does not support HTML5 video.
</video></center>