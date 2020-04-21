<form name ="form_upload" action="" method="post" enctype="multipart/form-data" onSubmit="return CHKUpload(this)">
<input type="file" name="file_upload" id="file_upload" size="30">
<input type="submit" name="submit_upload" value="อัพโหลด" />
</form>


<script language="javascript">
function CHKUpload(){
var obj = document.form_upload;
var typeFile = obj.file_upload.value.split('.');
typeFile = typeFile[typeFile.length-1];
if(typeFile != "rar" && typeFile != "zip" && typeFile != "doc"){
alert("ไม่อณุญาตให้อัพโหลดไฟล์ประเภทนี้ครับ!!!");
obj.file_upload.focus(); 
return false;
}
else return true;
}
</script>