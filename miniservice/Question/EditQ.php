<?php 
    require "../connect_db/config.ini.php";
    $result = mysqli_query($mysqli,"SELECT * FROM tblquestion where question_id = '".$_GET["txt_id"]."'");
    while($row = $result->fetch_assoc()){
    $Qid = $row["question_id"];
    $Q = $row["question"];
    $A = $row["details"];
    }
?>
<center><h2>Edit Topic</h2>
<form action="save_EditQ.php" method="POST">
<table border="0" style="width: 90%">
    <tr>
        <td style="width: 10%">คำถาม</td>
        <td><textarea name="Q" style="width:100%" rows="3"maxlength="100"require><?php echo $Q ?></textarea></td>
    </tr>
    <tr><td colspan="2"><hr /></td></tr>
    <tr>
        <td>คำตอบ</td>
        <td><textarea name="A"style="width:100%" rows="20" require><?php echo $A ?></textarea></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input type="hidden"  name="select" value=<?php echo $Qid?>>
            <input type="submit" name="save" value="บันทึก"style="width:100"> 
        </td>
    </tr>
</table>
</form>
