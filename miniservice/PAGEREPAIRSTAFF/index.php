<?php
    require "header.php";
?>
<title>หน้าแรกช่าง</title>
<center>
<H1>ติดตามสถานะงานซ่อม</H1>
<br>
<!-- ส่วนค้นหา -->
<?php
	$srtkeyword = null;
	if(isset($_POST["txtkeyword"]))
	{
		$srtkeyword = $_POST["txtkeyword"];
	}
?>
<form name="frmSearch" method="post" action="index.php">
    <table style="width:20%"border="0px">
    <tr>
        <th>ค้นหา</th>
        <th><input name="txtkeyword" style="width: 100%" type="text" id="txtkeyword" value="<?php echo $srtkeyword;?>" placeholder="รหัสงาน / รหัสลูกค้า / ชื่อ - สกุล"></th>
        <th><input type="submit" value="ค้นหา"></th>
    </tr>
    </table>
</form>
<br>
<!-- ส่วนค้นหา -->
<!-- ส่วนตาราง -->
<?php
 $result = mysqli_query($mysqli,
 "SELECT a.job_id , a.cus_id , b.cus_firstname , b.cus_lastname , a.sn , 
 a.type_product , c.status_name , a.date_jobstart , a.date_jobend 
  FROM tbljob a 
  INNER JOIN tblcustomer b ON a.cus_id = b.cus_id
  INNER JOIN tblstatus c ON a.status_id = c.status_id
  WHERE a.job_id LIKE '%".$srtkeyword."%'
  OR a.cus_id LIKE '%".$srtkeyword."%'
  OR b.cus_firstname LIKE '%".$srtkeyword."%'
  OR b.cus_lastname LIKE '%".$srtkeyword."%'
  ");
?>
<table id='ShowTable' style="width:80%" border="0px" bgcolor="#FFFFFF"cellspacing="0" >
    <th>รหัสงาน</th>
    <th>รหัสลูกค้า</th>
    <th>ชื่อ</th>
    <th>หมายเลขผลิตภัณฑ์</th>
    <th>ประเภทสินค้า</th>
    <th>สถานะงาน</th>
    <th>วันที่เปิดงาน</th>
    <th>วันที่ปิดงาน</th>
    <th>เลือก</th>
    <tr><td colspan="9"><hr /></td></tr>
    <tbody>
    <?php
            if($result == true){
                while($row = $result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row["job_id"]."</td>";
                    echo "<td>".$row["cus_id"]."</td>";
                    echo "<td>".$row["cus_firstname"]." ".$row["cus_lastname"]."</td>";
                    echo "<td>".$row["sn"]."</td>";
                    echo "<td>".$row["type_product"]."</td>";
                    echo "<td>".$row["status_name"]."</td>";
                    echo "<td>".$row["date_jobstart"]."</td>";
                    if ($row["date_jobstart"] = "0000-00-00") {
                        echo "<td>"."-"."</td>";
                    } else {
                        echo "<td>".$row["date_jobend"]."</td>";
                    }
                    ?>
                        <td>
                            <form action="status_job2.php" method="POST">
                                <input type="hidden"  name="select" value=<?php echo $row["job_id"]?>>
                                <input type="submit" name="submit" value = "เลือก"style="width:100%"> 
                            </form>
                        </td>
                <?php
                    echo "</tr>";
                ?>
            <tr><td colspan="9"><hr /></td></tr>
            <?php 
        }
            ?> 
<?php
            } else {
                echo "<tr>";
                echo "<td colspan='9'>"."<center>"."ไม่มีข้อมูล"."</center>"."</td>";
                
                echo "</tr>";
            }
            
                ?> 
	</tbody> 
</table>
<!-- ส่วนตาราง -->
<?php
require "../footer.ini.php";