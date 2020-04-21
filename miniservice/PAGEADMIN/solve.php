<?php
require 'header.php';
require 'config.inc.php';

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
    $sql = "UPDATE tblemployee set emp_id_card = '$id_card' , emp_prefix = '$prefix', emp_firstname = '$firstname', emp_lastname = '$lastname',
            emp_phoneno = '$phone', emp_email = '$emil', emp_username = '$username', emp_password = '$password' where emp_id = '$id' ";
    $result = mysqli_query($con,$sql);

    if($result == TRUE){
        echo "<script>alert('แก้ไขเรียบร้อยแล้ว ID $id !')</script>";
    }
    else{
        echo "ERORR";
    }
}
$emp1 = mysqli_query($mysqli,
		"SELECT * FROM tblemployee WHERE emp_id = '".$_POST["ID"]."'");
	    $emp1row = $emp1->fetch_assoc();
?>
<center><H1><br>แก้ไข</H1>
<H3><br>แก้ไขข้อมูลพนักงาน</H3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="ID" value="<?php echo $_POST['ID']; ?>">
        <table>
            <tr>
                <td>รหัสพนักงาน</td>
                <td><input name="IDD" disabled value="<?php echo $_POST['ID']; ?>"type="text" required></td>
            </tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr>
                <td>เลขบัตร ปชช&nbsp;</td>
                <td><input name="id_card" type="text" value="<?php echo $emp1row['emp_id_card'] ?>" required maxlength="13" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57 ){event.returnValue = false;}"></td>
            </tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr>
                <td>คำนำหน้า</td>
                <td><select id="prefix" name="prefix" required style="width: 100%">
                <option value=""></option>
                <option value="นาย">นาย</option>
                <option value="นาง">นาง</option>
                <option value="นางสาว">นางสาว</option>
            </select></td>
            </tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr>
                <td>ชื่อ</td>
                <td><input name="firstname" type="text" value="<?php echo $emp1row['emp_firstname'] ?>" maxlength="25" required></td>
            </tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr>
                <td>สกุล</td>
                <td><input name="lastname" type="text" value="<?php echo $emp1row['emp_lastname'] ?>" maxlength="25" required></td>
            </tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr>
                <td>เบอร์โทร</td>
                <td><input name="phone" type="text" value="<?php echo $emp1row['emp_phoneno'] ?>" required maxlength="10" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57 ){event.returnValue = false;}"></td>
            </tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr>
                <td>Email</td>
                <td><input name="email" type="text" value="<?php echo $emp1row['emp_email'] ?>"maxlength="100" required></td>
            </tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr>
                <td>ชื่อผู้ใช้</td>
                <td><input name="username" type="text" value="<?php echo $emp1row['emp_username'] ?>"maxlength="25" required></td>
            </tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr>
                <td>รหัสผ่าน</td>
                <td><input name="password" type="text" value="<?php echo $emp1row['emp_password'] ?>" maxlength="25" required></td>
            </tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr>
                <td>&nbsp;</td>
                <td><input name="submit"type="submit" value = "ยืนยันการแก้ไข"></td>
            </tr>
        </table>
</form>

