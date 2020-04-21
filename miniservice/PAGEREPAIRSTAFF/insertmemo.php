<link rel="stylesheet" href="../css/menu.css">
    <nav>
        <ul class="menu">
            <li class="logo"><a href="#">เพิ่มบันทึกข้อความ</a></li>
        </ul>
    </nav>
<?php session_start();
require "../connect_db/config.ini.php";
    $่job_id = $_GET["txt_id"];
?>
<center><br>
<table border="0" style="width: 90%">
    <tr><td>
    <form action="save_insertmemo.php" method="POST">
    ชื่อพนักงาน : <?php echo $_SESSION["emp_firstname"]." ".$_SESSION["emp_lastname"]; ?><br>
    รหัสพนักงาน : <?php echo $_SESSION["emp_id"]; ?><br>
    สถานะ<br/>
    <select name="status_id" required>
        <option value=""> </option>
        <option value="12">โทรเข้า</option>
        <option value="13">โทรออก</option>
        <option value="14">ภายใน</option>
    </select><br/>
    ข้อความ<br/>
    <input type="text" name="message" maxlength="25" required><br/><br/>
    <input type="hidden"  name="select" value=<?php echo $่job_id;?>>
        <input type="submit" name="submit" value = "บันทึก"style="width:20%"> 
    </form>
    </td></tr>
</table>