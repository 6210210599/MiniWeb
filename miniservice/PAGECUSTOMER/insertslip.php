<?php 
    require "../connect_db/config.ini.php";
    $job = mysqli_query($mysqli,
    "SELECT * FROM tbljob WHERE job_id = '".$_GET['txt_id']."'");
while($jobrow = $job->fetch_assoc()){
    $jobid = $jobrow["job_id"];
    $cusid = $jobrow["cus_id"];
    $sn = $jobrow["sn"];
    $type_product = $jobrow["type_product"];
    $product_name = $jobrow["product_name"];
    $product_model = $jobrow["product_model"];
    $accessory = $jobrow["accessory"];
    $symptoms = $jobrow["symptoms"];
    $date_jobstart = $jobrow["date_jobstart"];
    $image = $jobrow["image"];
    $status_id = $jobrow["status_id"];
}
?>
<script language="javascript">
function CHKUpload(){
var obj = document.Add;
var typeFile = obj.fileupload.value.split('.');
typeFile = typeFile[typeFile.length-1];
if(typeFile != "png" && typeFile != "jpg"){
alert("!!! เฉพาะไฟล์ png และ jpg เท่านั้น !!!");
obj.fileupload.focus();
return false;
}
else return true;
}
</script>
<center><h2>Add Slip</h2>

<form action="save_insertslip.php" enctype="multipart/form-data" onSubmit="return CHKUpload(this)" method="POST">
    <table border="0" style="width: 90%">
    <tr>
        <td style="width: 15%">รหัสงาน</td>
        <td><input type="text" name="jobid" value="<?php echo $_GET['txt_id']; ?>" readonly></td>
    </tr>
    <tr><td colspan="2"><hr /></td></tr>
    <tr>
        <td>รหัสลูกค้า</td>
        <td><input type="text" name="cusid" value="<?php echo $cusid; ?>" readonly></td>
    </tr>
    <tr>
        <td>หลักฐานการโอนเงิน</td>
        <td><input type="file" name="fileUpload" required></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input type="submit" name="save" value="บันทึก"style="width:100"> 
        </td>
    </tr>
    </table>
</form>