<center><h2>Add Topic</h2>
<form action="save_AddQ.php" method="POST">
    <table border="0" style="width: 90%">
    <tr>
        <td style="width: 10%">คำถาม</td>
        <td><textarea name="Q" style="width:100%" rows="3"maxlength="100"required placeholder="ใส่ได้ 100 ตัวอักษร"></textarea></td>
    </tr>
    <tr><td colspan="2"><hr /></td></tr>
    <tr>
        <td>คำตอบ</td>
        <td><textarea name="A"style="width:100%" rows="20" required></textarea></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input type="submit" name="save" value="บันทึก"style="width:100"> 
        </td>
    </tr>
    </table>
</form>