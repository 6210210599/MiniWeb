<style>
table#t1 {
width:100%;
}
table#t1, th#t1, td #t1{
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

<?php
require "header.php";


$con =new mysqli(CONF_DB_HOST,CONF_DB_USERNAME,CONF_DB_PASSWORD,CONF_DB_NAME);

if($con->connect_error){
        die("Connection faied  :  ".$con->connect_error);
}
$con->set_charset("utf8");
 ?>

 
<div id="update">
<br>
<center><h1><MARQUEE behavior=alternate direction=left scrollAmount=3 width="4%"><font face=Webdings>3</font></MARQUEE><MARQUEE scrollAmount=1 direction=left width="2%">| | |</MARQUEE>&nbsp;Order&nbsp;<MARQUEE scrollAmount=1 direction=right width="2%">| | |</MARQUEE><MARQUEE behavior=alternate direction=right scrollAmount=3 width="4%"><font face=Webdings>4</font></MARQUEE></h1></center>


</div>
<br>
<br>
<div id="content"  style="float: center;">


<center>


    <center><table border="1" cellspacing ="0" id="t1">
        <tr>
            <td><h3>รหัสงาน</font></h3></td>
            <td><h3>รหัสลูกค้า</font></h3></td>
            <td><h3>อาการเสียของเคารื่อง</font></h3></td>
            <td><h3>หมายเลขผลิตภัณฑ์</font></h3></td>
            <td><h3>ประเภทสินค้า</font></h3></td>
            <td><h3>อนุมัติงาน</font></h3></td>
            <td><h3>ยกเลิกงาน</font></h3></td>
        </tr></center>
 <?php

$sql="SELECT * FROM tbljob WHERE status_id  = '1'";
$result = $con->query($sql);


while($row=mysqli_fetch_assoc($result)){ 
    $jbcan = $row["job_id"];
    ?>    

   <tbody>
        <td> <?php echo $row['job_id']; ?> </td>
        <td> <?php echo $row['cus_id']; ?> </td>
        <td> <?php echo $row['symptoms']; ?> </td>
        <td> <?php echo $row['sn']; ?> </td>
        <td> <?php echo $row['type_product']; ?> </td>

   
        <td> 
            <form action="2.Check-approval.php" method="post">
            <input type="hidden" name="select" value="<?php echo $row['cus_id']; ?>">
            <input type="submit"  value="อนุมัติ"style="width:100%">
            </form>
        </td>

        <td> 
            <form action="cancel.php" method="post">
            <input type="hidden" name="select1" value="<?php echo $jbcan ?>">
            <input type="submit"  value="ยกเลิก"style="width:100%">
            </form>
        </td>
            

    </tbody>


<?php
        }
  ?>  

    </table>
    </center>
    <?php
require "../footer.ini.php";