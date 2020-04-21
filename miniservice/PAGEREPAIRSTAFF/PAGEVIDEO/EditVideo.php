<?php 
    require "../../connect_db/config.ini.php";
    $video = mysqli_query($mysqli,"SELECT * FROM tblvideo Where video_id = '".$_GET["txt_id"]."'");
    $row = $video->fetch_assoc();
    $id = $row['video_id'];
    $name = $row['video_name'];
    $description = $row['video_description'];
    $url = $row['url'];
?>
<script language="javascript">
function CHKUpload(){
var obj = document.Add;
var typeFile = obj.fileupload.value.split('.');
typeFile = typeFile[typeFile.length-1];
if(typeFile != "mp4"){
alert("!!! เฉพาะไฟล์ mp4 เท่านั้น !!!");
obj.fileupload.focus(); 
return false;
}
else return true;
}
</script>
<center><h2>Edit Video</h2>
<form action="save_EditVideo.php" enctype="multipart/form-data" onSubmit="return CHKUpload(this)" method="POST">
<table border="0" style="width: 90%">
    <tr>
        <td style="width: 10%">เรื่อง</td>
        <td><textarea name="Name" style="width:100%" rows="3"maxlength="100"require><?php echo $name ?></textarea></td>
    </tr>
    <tr><td colspan="2"><hr /></td></tr>
    <tr>
        <td>รายละเอียด</td>
        <td><textarea name="Des"style="width:100%" rows="20" require><?php echo $description ?></textarea></td>
    </tr>
    <tr>
        <td>วิดีโอ (เก่า)</td>
        <td><input type="text" name="url" style="width: 100%" value="<?php echo $url ?>" disabled></td>
    </tr>
    <tr>
        <td>วิดีโอ (ใหม่)</td>
        <td><input type="file" name="fileUpload" /></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input type="hidden"  name="select" value="<?php echo $id ?>">
            <input type="submit" name="save" value="บันทึก"style="width:100"> 
        </td>
    </tr>
</table>
</form>