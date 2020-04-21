<?php
    require "../connect_db/config.ini.php";
?>
        <title>
            หน้าสมัครสมาชิก
        </title>
        <meta charset="utf8">
        <center>
        <h1>สมัครสมาชิก</h1>
        <table style="width:30%" border="0px">
        <tr>
        <td>เลขบัตรประชาชน</td>
        <td><input type="text" required placeholder="เลขบัตรประชาชน"></td>
    </tr>
    <tr>
        <td>คำนำหน้า</td>
        <td>
            <input type="radio" name="gender" value="นาย"> นาย 
            <input type="radio" name="gender" value="นาง"> นาง
            <input type="radio" name="gender" value="นางสาว"> นางสาว
        </td>
    </tr>
    <tr>
        <td>ชื่อ</td>
        <td><input type="text"required placeholder="ชื่อ"></td>
    </tr>
    <tr>
        <td>นามสกุล</td>
        <td><input type="text"required placeholder="นามสกุล"></td>
    </tr>
    <tr>
        <td>เบอร์โทร</td>
        <td><input type="text"required placeholder="เบอร์โทร"></td>
    </tr>
    <tr>
        <td>อีเมล</td>
        <td><input type="text"required placeholder="อีเมล"></td>
    </tr>
    <tr>
        <td>ชื่อผู้ใช้</td>
        <td><input type="text"required placeholder="ชื่อผู้ใช้"></td>
    </tr>
    <tr>
        <td>รหัสผ่าน</td>
        <td><input type="password"required placeholder="รหัสผ่าน"></td>
    </tr>
    <tr>
        <td>ยืนยันรหัสผ่าน</td>
        <td><input type="password"required placeholder="ยืนยันรหัสผ่าน"></td>
    </tr>
    <div class="button-area">
    <tr>
        <td><a href="../index.php">กลับ</a></td>
        <td><button class="btn btn-primary">สมัครสมาชิก</button></td>
    </tr>
    </div>
        </table>
       
    </body>
</html>