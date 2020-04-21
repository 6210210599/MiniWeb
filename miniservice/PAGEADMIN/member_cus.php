<?php
require 'config.inc.php';


if(isset($_POST['submit'])){
    $id_card = $_POST["id_card"];
    $prefix = $_POST["prefix"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phoneno = $_POST["phoneno"];
    $emil = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "INSERT INTO tblcustomer(cus_id_card,cus_prefix,cus_firstname,cus_lastname,cus_phoneno,cus_email,cus_username,cus_password) values ('$id_card','$prefix','$firstname','$lastname','$phoneno','$emil','$username','$password')"; 
    $result = mysqli_query($con,$sql);

    if($result == TRUE){
        echo "<script>alert('สมัครสำเร็จแล้ว!')</script>)";
    }
    else{
        echo "ERORR";
    }
}
?>

<?php
require 'header.php';
?>
<center><H1><br>ลงทะเบียน</H1>
<H3><br>สมัครสมาชิกเพื่อเข้าใช้งาน</H3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table>
        <tr>
            <td>เลขบัตร ปชช</td>
            <td><input name="id_card" type="text" required maxlength="13" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57 ){event.returnValue = false;}" required></td>
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
            <td><input name="phoneno" type="text" maxlength="10" required></td>
        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr>
            <td>Email</td>
            <td><input name="email" type="text" maxlength="100" required></td>
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
            <td><input name="submit"type="submit" value = "สมัครสมาชิก"></td>
        </tr>
    </table>     
</form>
    </body>
</html>
