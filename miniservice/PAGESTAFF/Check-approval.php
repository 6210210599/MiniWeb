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
<p><center><h1> ตรวจสอบการอนุมัติ </h1></center></p>

<?php

$sql="SELECT * FROM tblcustomer WHERE cus_id = '".$_POST["select"]."'";
$result = $con->query($sql);


while($row=mysqli_fetch_assoc($result)){ ?>  


<div>
<center><form>
    รหัสลูกค้า:<br>
    <table border='1'width="40%" bgcolor="#99FFFF">
    <thead>
        <th><?php echo $row['cus_id']; ?></th>
    </thead></table>

    <br>เลขบัตรประชาชน:<br>
    <table border='1'width="40%" bgcolor="#99FFFF">
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

    <br>
    <center>
    <form action="1.Order.php" method="post">
    <label for="txtBirthDate">วันที่อนุมัติ</label>
		<input type="date" id="txtBirthDate" name="dateappro" />
        <br>
        <br>
        <input type="submit" name="btnSubmit" value="อนุมัติ"style="width:7.5%" />
	</form></center>
    <br>
    <center>
    <form action="1.Order.php" method="post">
            <input type="submit"  value="ไม่อนุมัติ"style="width:7.5%">
            </form>
    </center>
    <br>
    <br>










