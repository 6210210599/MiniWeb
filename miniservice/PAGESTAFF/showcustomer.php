<?php
    require "header.php";
?>
<?php
	$srtkeyword = null;

	if(isset($_POST["txtkeyword"]))
	{
		$srtkeyword = $_POST["txtkeyword"];
	}
?>
<title>staff - ข้อมูลลูกค้า</title>
<center>
<h1>ข้อมูลลูกค้า</h1>
<form name="frmSearch" method="post" action="showcustomer.php">
    <table style="width:20%"border="0px">
    <tr>
        <th>ค้นหา</th>
        <th><input name="txtkeyword" type="text" id="txtkeyword" value="<?php echo $srtkeyword;?>" placeholder="กรอกข้อมูล"></th>
        <th><input type="submit" value="ค้นหา"></th>
    </tr>
    </table>
</form>

<a href="insertcustomer.php"><font color="black">เพิ่ม</font></a>
<?php
 $result = mysqli_query($mysqli,
 "SELECT *
  FROM tblcustomer 
  WHERE cus_id LIKE '%".$srtkeyword."%' 
  OR cus_phoneno LIKE '%".$srtkeyword."%' 
  OR cus_email LIKE '%".$srtkeyword."%'
  OR cus_id_card LIKE '%".$srtkeyword."%'");
?>
<table style="width:80%">
    <tr>
        <th>รหัสลูกค้า</th>
        <th>คำนำหน้า</th>
        <th>ชื่อ</th>
        <th>เบอร์โทร</th>
        <th>อีเมล</th>
    </tr>
    <tr><td colspan="6"><hr /></td></tr> 
    <tbody>
    <?php
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$row["cus_id"]."</td>";
                echo "<td>".$row["cus_prefix"]."</td>";
                echo "<td>".$row["cus_firstname"]." ".$row["cus_lastname"]."</td>";
                echo "<td>".$row["cus_phoneno"]."</td>";
                echo "<td>".$row["cus_email"]."</td>";
                
                ?>
                <td>
                    <form action="editcustomer.php" method="POST">
                        <input type="hidden"  name="select" value=<?php echo $row["cus_id"]?>>
                        <input type="submit" name="submit" value = "แก้ไข"style="width:100%"> 
                    </form>
                </td>
            <?php 
            echo "</tr>";
            ?>
            <tr><td colspan="6"><hr /></td></tr>
            <?php 
            
        }
            ?> 
	</tbody> 
</table>


       
 <?php
    require "../footer.ini.php";