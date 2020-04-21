
<?php

$con =new mysqli(CONF_DB_HOST,CONF_DB_USERNAME,CONF_DB_PASSWORD,CONF_DB_NAME);

if($con->connect_error){
        die("Connection faied  :  ".$con->connect_error);
}
$con->set_charset("utf8");
 ?>
<style>
table#t1 {
width:100%;
}
table#t1, th#t1, td#t1 {
border: 1px solid black;
border-collapse: collapse;
padding: 10px;
text-align: center;
}
table#t1 tr:nth-child(even) {
background-color: #eee;
}
table#t1 tr:nth-child(odd) {
background-color: #fff;
}
table#t1 tr {
background-color: black;

}
</style>
 <div id="update">
  <br>
<center><h1><MARQUEE behavior=alternate direction=left scrollAmount=3 width="4%"><font face=Webdings>3</font></MARQUEE><MARQUEE scrollAmount=1 direction=left width="2%">| | |</MARQUEE>&nbsp;Follow Work&nbsp;<MARQUEE scrollAmount=1 direction=right width="2%">| | |</MARQUEE><MARQUEE behavior=alternate direction=right scrollAmount=3 width="4%"><font face=Webdings>4</font></MARQUEE></h1></center>
<br>
<br>
<div id="content"  style="float: center;">


  <center>
  
  
      <center><table  border="1" cellspacing ="0" id="t1">
          <tr>
              <td><h3>รหัสงาน</font></h3></td>
              <td><h3>รหัสลูกค้า</font></h3></td>
              <td><h3>อาการเสียของเครื่อง</font></h3></td>
              <td><h3>สถานะงาน</font></h3></td>
              <td><h3>วันเริ่มงาน</font></h3></td>
              <td><h3>รายละเอียด</font></h3></td>
              <td><h3>รับสินค้าแล้ว</font></h3></td>
              <td><h3>ยืนยันปิดงาน</font></h3></td>
          </tr></center>
<?php
  
$sql="SELECT a.job_id , a.cus_id , a.symptoms , b.status_name , a.date_jobstart FROM tbljob a 
INNER JOIN tblstatus b ON a.status_id = b.status_id 
WHERE a.status_id  NOT LIKE '1'";


$result = $con->query($sql);
  
  
while($row=mysqli_fetch_assoc($result)){ 
    $jbuppro = $row["job_id"];
    $jbclose  = $row["job_id"];
    $statusid  = $row["status_name"];
    ?>    
    <tbody id="t1">
        <td> <?php echo $row['job_id']; ?> </td>
        <td> <?php echo $row['cus_id']; ?> </td>
        <td> <?php echo $row['symptoms']; ?> </td>
        <td> <?php echo $row['status_name']; ?> </td>
        <td> <?php echo $row['date_jobstart']; ?> </td>
        <td> 
            <form action="4.Details.php" method="post">
            <input type="hidden" name="detail1" value="<?php echo $row['cus_id']; ?>">
            <input type="hidden" name="detail2" value="<?php echo $row['job_id']; ?>">
            <input type="submit"  value="รายละเอียด"style="width:100%">
            </form>
        </td>
        <td> 
            <form action="upproduct.php" method="post">
            <input type="hidden" name="pickup" value="<?php echo $jbuppro ?>">
            <input type="submit"  value="รับของแล้ว"style="width:100%">
            </form>
        </td>
        <td> 
            <?php 
                if($row["status_name"] = 'จบงานซ่อม'){
            ?>
                <form action="closework.php" method="post">
                    <input type="hidden" name="close" value="<?php echo $jbclose ?>">
                    <input type="submit"  value="ปิดงาน"style="width:100%">
                </form>
            <?php
                }
            ?>
            
        </td>
              
  
    </tbody>
  
  
<?php
        }
  ?>  
  
    </table>
    </center>
    <?php
require "../footer.ini.php";