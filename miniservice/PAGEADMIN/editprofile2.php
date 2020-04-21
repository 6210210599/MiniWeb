<?php 
    require "header.php";
    $emp = mysqli_query($mysqli,"SELECT * FROM tblemployee WHERE emp_id LIKE '%".$_SESSION["emp_id"]."%' ");
    $emprow = $emp->fetch_assoc();
    $empid = $emprow["emp_id"];
    $empidcard = $emprow["emp_id_card"];
    $empprefix = $emprow["emp_prefix"];
    $empfirstname = $emprow["emp_firstname"];
    $emplastname = $emprow["emp_lastname"];
    $empphoneno = $emprow["emp_phoneno"];
    $empemail = $emprow["emp_email"];
    $emp_username = $emprow["emp_username"];
    $emppassword = $emprow["emp_password"];
?>
 <center>
<h1>แก้ไข</h1>

<table style="width:25%" border="0px">
    <thead>
        <td> <H3>ข้อมูลส่วนตัว<hr /></H3> </td>
    </thead>
    <tbody>
    <tr><td>รหัสพนักงาน</td><td><input type="text"value="<?php echo $empid ?>"disabled></td></tr>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>เลขบัตรประชาชน</td><td><input type="text"value="<?php echo $empidcard ?>"disabled></td></tr>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>คำนำหน้า</td><td><input type="text"value="<?php echo $empprefix ?>"disabled></td></tr>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>ชื่อ</td><td><input type="text"value="<?php echo $empfirstname ?>"disabled></td></tr>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>นามสกุล</td><td><input type="text"value="<?php echo $emplastname ?>"disabled></td></tr>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>เบอร์โทร</td><td><input type="text"value="<?php echo $empphoneno ?>"></td></tr>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>อีเมล</td><td><input type="text"value="<?php echo $empemail ?>"></td></tr>
    <tr><td>&nbsp;</td> </tr>    
    <tr><td>&nbsp;</td><td>
    <form method="POST" action="editprofile.php">
    <button name="btn" class="button">บันทึกข้อมูล</button>
    </form>
        </td></tr>
    </tbody>
</table>
<?php
    require "../footer.ini.php";