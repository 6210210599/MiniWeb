<?php
require 'config.inc.php';
require 'header.php';

if(isset($_POST['submit'])){
    $id = $_POST["ID"];
    $id_card = $_POST["id_card"];
    $prefix = $_POST["prefix"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phone = $_POST["phone"];
    $emil = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "UPDATE tblcustomer set cus_id_card = '$id_card' , cus_prefix = '$prefix', cus_firstname = '$firstname', cus_lastname = '$lastname',
            cus_phoneno = '$phone', cus_email = '$emil', cus_username = '$username', cus_password = '$password' where cus_id = $id ";
    $result = mysqli_query($con,$sql);

    if($result == TRUE){
        echo "<script>alert('แก้ไขเรียบร้อยแล้ว ID $id !')</script>";
    }
    else{
        echo "ERORR";
    }
}
$cus1 = mysqli_query($mysqli,
		"SELECT * FROM tblcustomer WHERE cus_id = '".$_POST["ID"]."'");
	    $cus1row = $cus1->fetch_assoc();
?>
<center><H1><br>แก้ไข</H1>
<H3><br>แก้ไขข้อมูลลูกค้า</H3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="hidden" name="ID" value="<?php echo $_POST['ID']; ?>">
<table>
    <tr>
        <td>รหัสลูกค้า</td>
        <td><input name="ID" disabled value="<?php echo $_POST['ID']; ?>"type="text" required></td>
    </tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr>
        <td>เลขบัตร ปชช</td>
        <td><input name="id_card" type="text" value="<?php echo $cus1row['cus_id_card'] ?>" required maxlength="13" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57 ){event.returnValue = false;}" required></td>
    </tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr>
        <td>คำนำหน้า</td>
        <td>
            <select id="prefix" name="prefix" required style="width: 100%">
                <option value=""></option>
                <option value="นาย">นาย</option>
                <option value="นาง">นาง</option>
                <option value="นางสาว">นางสาว</option>
            </select>
        </td>
    </tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr>
        <td>ชื่อ</td>
        <td><input name="firstname" type="text" value="<?php echo $cus1row['cus_firstname'] ?>" maxlength="25" required></td>
    </tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr>
        <td>สกุล</td>
        <td><input name="lastname" type="text" value="<?php echo $cus1row['cus_lastname'] ?>" maxlength="25" required></td>
    </tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr>
        <td>เบอร์โทร</td>
        <td><input name="phone" type="text" value="<?php echo $cus1row['cus_phoneno'] ?>" required maxlength="10" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57 ){event.returnValue = false;}" required></td>
    </tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr>
        <td>Email</td>
        <td><input name="email" type="text" value="<?php echo $cus1row['cus_email'] ?>" maxlength="100" required></td>
    </tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr>
        <td>ชื่อผู้ใช้</td>
        <td><input name="username" type="text" value="<?php echo $cus1row['cus_username'] ?>" maxlength="25" required></td>
    </tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr>
        <td>รหัสผ่าน</td>
        <td><input name="password" type="text" value="<?php echo $cus1row['cus_password'] ?>" maxlength="25" required></td>
    </tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr>
        <td>&nbsp;</td>
        <td><input name="submit"type="submit" value = "ยืนยันการแก้ไข"></td>
    </tr>
    
</table>
</form>
           
    </body>
</html>
