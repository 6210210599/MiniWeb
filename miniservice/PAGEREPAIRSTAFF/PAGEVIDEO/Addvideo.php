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
<center><h2>เพิ่ม วิดีโอแก้ปัญหา</h2>
<form name="Add" action="save_Addvideo.php" method="POST" enctype="multipart/form-data" onSubmit="return CHKUpload(this)">
<table border="0" style="width: 90%">
    <tr>
        <td>เรื่อง</td>
        <td><textarea name="N" style="width:100%" rows="3"maxlength="100"required placeholder="ใส่ได้ 100 ตัวอักษร"></textarea></td>
    </tr>
    <tr><td colspan="2"><hr /></td></tr>
    <tr>
        <td>รายละเอียด</td>
        <td><textarea name="D"style="width:100%" rows="20" required></textarea></td>
    </tr>
    <tr><td colspan="2"><hr /></td></tr>
    <tr>
        <td>ไฟล์วิดีโอ</td>
        <td><input type="file" name="fileUpload" required="required"/></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input type="submit" name="save" value="บันทึก"style="width:100"> 
        </td>
    </tr>
</table></center>
</form>
