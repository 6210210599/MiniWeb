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
<center><h1><MARQUEE behavior=alternate direction=left scrollAmount=3 width="4%"><font face=Webdings>3</font></MARQUEE><MARQUEE scrollAmount=1 direction=left width="2%">| | |</MARQUEE> &nbsp;ตรวจสอบการอนุมัติ &nbsp;<MARQUEE scrollAmount=1 direction=right width="2%">| | |</MARQUEE><MARQUEE behavior=alternate direction=right scrollAmount=3 width="4%"><font face=Webdings>4</font></MARQUEE></h1></center>
<br>
<br>
<?php

$sql="SELECT * FROM tblcustomer WHERE cus_id = '".$_POST["select"]."'";
$result = $con->query($sql);


while($row=mysqli_fetch_assoc($result)){ 
    $cusid = $row["cus_id"];
    ?>  


<div>
<center><form>
    รหัสลูกค้า:<br>
    <table border='1'width="40%" bgcolor="#99FFFF">
    <thead>
        <th><?php echo $row['cus_id']; ?></th>
    </thead></table>

    <br>เลขบัตรประชาชน:<br>
    <table border='1'width="40%" bgcolor="#99FFFF" >
    <thead>
        <th><?php echo $row['cus_id_card']; ?></th>
    </thead></table>

    <br>ชื่อ - สกุล:<br>
    <table border='1'width="40%" bgcolor="#99FFFF">
    <thead>
        <th><?php echo $row['cus_prefix'];echo $row['cus_firstname'];echo $row['cus_lastname']; ?></th>
    </thead></table>

    <br>ข้อมูลติดต่อ:<br>
    <table border='1'width="40%" bgcolor="#99FFFF">
    <thead>
        <th><?php echo $row['cus_phoneno']; ?></th>
    </thead></table>

    <br>E-mail:<br>
    <table border='1'width="40%" bgcolor="#99FFFF">
    <thead>
        <th><?php echo $row['cus_email']; ?></th>
    </thead></table>

  </form></center>

</div>

<?php
        }
  ?> 


<?php
$sql="SELECT * FROM tbljob WHERE cus_id = '".$_POST["select"]."'";
$result = $con->query($sql);

while($row=mysqli_fetch_assoc($result)){ 
    $jbsid = $row["job_id"];
?>  

<div>
    <center><form>
    <br>ชื่อสินค้า:<br>
    <table border='1'width="40%" bgcolor="#99FFFF">
    <thead>
        <th><?php echo $row['product_name']; ?></th>
    </thead></table>

    <br>รุ่น:<br>
    <table border='1'width="40%" bgcolor="#99FFFF">
    <thead>
        <th><?php echo $row['product_model']; ?></th>
    </thead></table>

    <br>อุปกรณ์ที่นำมา:<br>
    <table border='1'width="40%" bgcolor="#99FFFF">
    <thead>
        <th><?php echo $row['accessory']; ?></th>
    </thead></table>

    <br>อาการ:<br>
    <table border='1'width="40%" bgcolor="#99FFFF">
    <thead>
        <th><?php echo $row['symptoms']; ?></th>
    </thead></table>

    </form></center>

</div>


<?php
        }
  ?>  
    <br>	

    <center>
    <form action="saveapproval.php" method="post">
            <input type="hidden" name="select1" value="<?php echo $jbsid ?>">
            <input type="submit"  value="อนุมัติ"style="7.5%">
    </form>
    </center>
    <br>
    


    <center>
    <form action="1.Order.php" method="post">
        <input type="submit"  name="notSubmit" value="ไม่อนุมัติ"style="width:7.5%" onClick='alert("โปรดตรวจสอบข้อมูลอีกครั้ง")'>
        
    </form>
    </center>
    <br>
    <br>
    <?php
require "../footer.ini.php";