<?php
    require "header.php";
?>
<center>
<h1>หน้าแรกของลูกค้า</h1>

<br>

<?php
 $result = mysqli_query($mysqli,
 "SELECT a.job_id , a.cus_id , b.cus_firstname , b.cus_lastname , a.sn , 
 a.type_product , a.status_job , a.date_jobstart , a.date_jobend
  FROM tbljob a INNER JOIN tblcustomer b ON a.cus_id = b.cus_id WHERE a.cus_id LIKE '%".$_SESSION["cus_id"]."%'");
?>
<table id='ShowTable' style="width:60%" border="0px" bgcolor="#FFFFFF" >
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
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$row["job_id"]."</td>";
                echo "<td>".$row["cus_id"]."</td>";
                echo "<td>".$row["cus_firstname"]." ".$row["cus_lastname"]."</td>";
                echo "<td>".$row["sn"]."</td>";
                echo "<td>".$row["type_product"]."</td>";
                echo "<td>".$row["status_job"]."</td>";
                echo "<td>".$row["date_jobstart"]."</td>";
                if ($row["date_jobstart"] = "0000-00-00") {
                    echo "<td>"."-"."</td>";
                } else {
                    echo "<td>".$row["date_jobend"]."</td>";
                }
                ?>
                <?php
		        /* echo "<td>".$row["date_jobend"]."</td>";*/
                ?>
                <td>
                    <form action="showdetail.php" method="POST">
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
           
    
	</tbody> 
</table>
<!-- ส่วนตาราง -->


<?php
require "../footer.ini.php";