<?php 
    require "header.php";
    ?>

<center>
<h1>เปลี่ยนรหัสผ่าน</h1>
<form name="frmprofile" method="POST" action="save_editpassword.php">
<table style="width:25%" border="0px">
    <thead>
        <td> <H3>รหัสผ่าน<hr /></H3> </td>
    </thead>
    <tbody>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>รหัสผ่านใหม่</td><td>
        <input type="password" name="emppassword"value=""maxlength="25"required>
    </td></tr>
    <tr><td>&nbsp;</td> </tr>
    <tr><td>ยืนยัน</td><td>
        <input type="password" name="con"value=""maxlength="25"required>
    </td></tr>
    <tr><td>&nbsp;</td> </tr>   
    <tr><td>
    </td><td>
    
        <button class="button button5">บันทึก</button>
    
    
        </td></tr>
    </tbody>
</table>
</form>