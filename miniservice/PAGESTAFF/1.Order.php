
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
<p><center><h1> การแจ้งซ่อม </h1></center></p>

</div>

<div id="content"  style="float: center;">


<center>


    <center><table border="1" bgcolor=#595959>
        <tr>
            <td><h3> รหัสงาน</font></h3></td>
            <td><h3>รหัสลูกค้า</font></h3></td>
            <td><h3>อาการเสียของเคารื่อง</font></h3></td>
            <td><h3>วันที่รับงาน</font></h3></td>
            <td><h3>เลือก</font></h3></td>
        </tr></center>
 <?php

$sql="SELECT * FROM tbljob";
$result = $con->query($sql);


while($row=mysqli_fetch_assoc($result)){ ?>    

   <tbody>
        <td> <?php echo $row['job_id']; ?> </td>
        <td> <?php echo $row['cus_id']; ?> </td>
        <td> <?php echo $row['symptoms']; ?> </td>
        <td> <?php echo $row['date_jobstart']; ?> </td>

   
        <td> 
            <form action="Check-approval.php" method="post">
            <input type="hidden" name="select" value="<?php echo $row['cus_id']; ?>">
            <input type="submit"  value="เลือก"style="width:100%">
            </form>
        </td>
            

    </tbody>


<?php
        }
  ?>  

    </table>
    </center>
