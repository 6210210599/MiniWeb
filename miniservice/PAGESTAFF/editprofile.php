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
<h1>หน้าแก้ไขข้อมูลส่วนตัวพนักงานหน้าร้าน</h1><br>
<table style="width:25%" border="0px">
    <thead>
        <td> <H3>ข้อมูลส่วนตัว<hr /></H3> </td>
    </thead>
    <tbody>
    <tr><td>รหัสพนักงาน</td><td><?php echo $empid ?></td></tr>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>เลขบัตรประชาชน</td><td><?php echo $empidcard ?></td></tr>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>คำนำหน้า</td><td><?php echo $empprefix ?></td></tr>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>ชื่อ</td><td><?php echo $empfirstname ?></td></tr>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>นามสกุล</td><td><?php echo $emplastname ?></td></tr>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>เบอร์โทร</td><td><?php echo $empphoneno ?></td></tr>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>อีเมล</td><td><?php echo $empemail ?></td></tr>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>ชื่อผู้ใช้</td><td><?php echo $emp_username ?></td></tr> 
    <tr><td>&nbsp;</td> </tr> 
    <tr><td>ตำแหน่ง</td><td><?php echo $positionname ?></td></tr> 
    <tr><td>&nbsp;</td> </tr>  
    <tr><td>
    <form name="frmpassword" method="POST" action="editpassword.php">
    <button class="button button5">เปลี่ยนรหัสผ่าน</button>
    </form>
    </td><td>
    <form name="frmprofile" method="POST" action="editprofile2.php">
        <button class="button button5">แก้ไขข้อมูล</button>
    </form>
    
        </td></tr>
    </tbody>
</table>
<?php
    require "../footer.ini.php";