<?php
require 'config.inc.php'; 
require 'header.php';

if(isset($_POST['submit'])){
    $id_card = $_POST["id_card"];
    $prefix = $_POST["prefix"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phoneno = $_POST["phoneno"];
    $emil = $_POST["email"];
    $positon = $_POST["positon"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "INSERT INTO tblemployee(emp_id_card,emp_prefix,emp_firstname,emp_lastname,emp_phoneno,emp_email,position_id,emp_username,emp_password) values ('$id_card','$prefix','$firstname','$lastname','$phoneno','$emil','$positon','$username','$password')";
    $result = mysqli_query($con,$sql);

    if($result == TRUE){
        echo "Yes I am True";
    }
    else{
        echo "ERORR";
    }
}

?>
<center><H1><br>สมัครพนักงาน</H1>
<H3><br>สมัครพนักงานเพื่อเข้าใช้งาน</H3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table>
    <tr>
        <td>เลขบัตรประชาชน</td>
        <td><input name="id_card" type="text" required maxlength="13" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57 ){event.returnValue = false;}" required></td>
    </tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr>
        <td>คำนำหน้า</td>
        <td>
            <select id="prefix" name="prefix"required style="width: 100%">
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
        <td><input name="firstname" type="text" maxlength="25" required></td>
    </tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr>
        <td>สกุล</td>
        <td><input name="lastname" type="text" maxlength="25" required></td>
    </tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr>
        <td>เบอร์โทร</td>
        <td><input name="phoneno" type="text" maxlength="10" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57 ){event.returnValue = false;}" required></td>
    </tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr>
        <td>email</td>
        <td><input name="email" type="text" maxlength="100"  required></td>
    </tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr>
        <td>ตำแหน่ง</td>
        <td>
            <select id="positon" name="positon"required style="width: 100%">
                <option value=""></option>
                <?php 
                $position1 = mysqli_query($mysqli,
                "SELECT * FROM tblposition");
                while($pselect = $position1->fetch_assoc()){
                ?>
                    <option value="<?php echo $pselect['position_id']?>"><?php echo $pselect['position_name']?></option>
                <?php
                }
                ?>
            </select>
        </td>
    </tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr>
        <td>ชื่อผู้ใช้</td>
        <td><input name="username" type="text" maxlength="25" required></td>
    </tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr>
        <td>รหัสผ่าน</td>
        <td><input name="password" type="text" maxlength="25" required></td>
    </tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr>
        <td>&nbsp;</td>
        <td> <input name="submit"type="submit" value = "สมัครสมาชิก"></td>
    </tr>
</table>
</form>
    </body>
</html>
