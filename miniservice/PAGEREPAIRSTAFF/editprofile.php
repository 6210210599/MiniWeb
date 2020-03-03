<?php 
    require "header.php";
    $emp = mysqli_query($mysqli,"SELECT * FROM tblemployee WHERE emp_id_card LIKE '%".$_SESSION["emp_id_card"]."%' ");
    $emprow = $emp->fetch_assoc();
    $empid = $emprow["emp_id"];
    $empidcard = $emprow["emp_id_card"];
    $empprefix = $emprow["emp_prefix"];
    $empfirstname = $emprow["emp_firstname"];
    $emplastname = $emprow["emp_lastname"];
    $empphoneno = $emprow["emp_phoneno"];
    $empemail = $emprow["emp_email"];
    $emppositon = $emprow["position_id"];
    $emppassword = $emprow["emp_password"];
?>
<center>
<h1>หน้าแก้ไขข้อมูลส่วนตัวช่าง</h1>

<table style="width:25%" border="0px">
    <tr>
        <td>รหัสพนักงาน</td>
        <td><input type="text"value="<?php echo $empid ?>"disabled></td>
    </tr>
    <tr>
        <td>เลขบัตรประชาชน</td>
        <td><input type="text"value="<?php echo $empidcard ?>"disabled></td>
    </tr>
    <tr>
        <td>คำนำหน้า</td>
        <td><input type="text" value="<?php echo $empprefix ?>"disabled></td>
    </tr>
    <tr>
        <td>ชื่อ</td>
        <td><input type="text" required value="<?php echo $empfirstname ?>"></td>
    </tr>
    <tr>
        <td>นามสกุล</td>
        <td><input type="text" required value="<?php echo $emplastname ?>"></td>
    </tr>
    <tr>
        <td>เบอร์โทร</td>
        <td><input type="text" required value="<?php echo $empphoneno ?>"></td>
    </tr>
    <tr>
        <td>อีเมล</td>
        <td><input type="text"required value="<?php echo $empemail ?>"></td>
    </tr>
    <tr>
        <td>รหัสผ่าน</td>
        <td><input type="password"required placeholder="รหัสผ่าน"></td>
    </tr>
    <tr>
        <td>ยืนยันรหัสผ่าน</td>
        <td><input type="password"required placeholder="ยืนยัน"></td>
    </tr>
    
    <tr>
        <td>&nbsp;</td>
        <td><input type="submit" value="บันทึก" style="width:50%"></td>
    </tr>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
    require "../footer.ini.php";