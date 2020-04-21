<?php 
    require "header.php";
    $emp = mysqli_query($mysqli,
    "SELECT a.emp_id , a.emp_id_card , a.emp_prefix , a.emp_firstname , a.emp_lastname , a.emp_phoneno , a.emp_email , a.emp_username , a.emp_password , b.position_name  
    FROM tblemployee a 
    INNER JOIN tblposition b ON a.position_id = b.position_id 
    WHERE emp_id LIKE '%".$_SESSION["emp_id"]."%' ");
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
    $positionname = $emprow["position_name"];
?>
<center>
<h1>แก้ไข</h1><br>
<form name="frmedit" method="POST" action="save_editprofile.php">
<table style="width:25%" border="0px">
    <thead>
        <td> <H3>ข้อมูลส่วนตัว<hr /></H3> </td>
    </thead>
    <tbody>
    <tr><td>รหัสพนักงาน</td><td>
        <input type="text"value="<?php echo $empid ?>"disabled>
    </td></tr>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>เลขบัตรประชาชน</td><td>
        <input type="text"value="<?php echo $empidcard ?>"disabled>
    </td></tr>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>คำนำหน้า</td><td>
        <input type="text"value="<?php echo $empprefix ?>"disabled>
    </td></tr>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>ชื่อ</td><td>
        <input type="text"value="<?php echo $empfirstname ?>"disabled>
    </td></tr>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>นามสกุล</td>
    <td><input type="text"value="<?php echo $emplastname ?>"disabled>
</td></tr>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>เบอร์โทร</td>
    <td><input type="text" name="phone"value="<?php echo $empphoneno ?>" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57 ){event.returnValue = false;}" maxlength="10" required>
</td></tr>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>อีเมล</td><td>
        <input type="email" name="email"value="<?php echo $empemail ?>" required>
    </td></tr>
    <tr><td>&nbsp;</td> </tr>    
    <tr><td>ชื่อผู้ใช้</td><td>
        <input type="text"value="<?php echo $emp_username ?>"disabled>
    </td></tr>
    <tr><td>&nbsp;</td><td>
    <tr><td>ตำแหน่ง</td><td>
        <input type="text"value="<?php echo $positionname ?>"disabled>
    </td></tr>
    <tr><td>&nbsp;</td><td>
        </td></tr>
    </tbody>
</table>
<input type="submit" name="submit" value="บันทึกข้อมูล">
</form>
<?php
    require "../footer.ini.php";