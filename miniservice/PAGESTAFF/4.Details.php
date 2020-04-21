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
<center><h1><MARQUEE behavior=alternate direction=left scrollAmount=3 width="4%"><font face=Webdings>3</font></MARQUEE><MARQUEE scrollAmount=1 direction=left width="2%">| | |</MARQUEE>&nbsp;Details&nbsp;<MARQUEE scrollAmount=1 direction=right width="2%">| | |</MARQUEE><MARQUEE behavior=alternate direction=right scrollAmount=3 width="4%"><font face=Webdings>4</font></MARQUEE></h1></center>
<br>
<?php

$sql="SELECT * FROM tblcustomer WHERE cus_id = '".$_POST["detail1"]."'";
$result = $con->query($sql);


while($row=mysqli_fetch_assoc($result)){ ?>  


<div>
<center><form>
    <p><center><h2>รายละเอียดลูกค้า</h2></center></p>
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

</div></div>

<?php
        }
  ?>  

<br><br>

<?php

$sql="SELECT a.number , a.job_id , b.emp_firstname , b.emp_lastname , a.date_memo , c.status_name , a.message_memo  FROM tblmemo a 
INNER JOIN tblemployee b ON a.emp_id = b.emp_id 
INNER JOIN tblstatus c ON a.status_id = c.status_id
WHERE a.job_id = '".$_POST["detail2"]."'";
$result = $con->query($sql);



while($row=mysqli_fetch_assoc($result)){ ?>  


<div>
<center><form>
    <p><center><h2>รายละเอียดงานซ่อม</h2></center></p>
    ลำดับ:<br>
    <table border='1'width="40%" bgcolor="#FFFF66">
    <thead>
        <th><?php echo $row['number']; ?></th>
    </thead></table>

    <br>รหัสงาน:<br>
    <table border='1'width="40%" bgcolor="#FFFF66">
    <thead>
        <th><?php echo $row['job_id']; ?></th>
    </thead></table>

    <br>รหัสพนักงาน:<br>
    <table border='1'width="40%" bgcolor="#FFFF66">
    <thead>
        <th><?php echo $row['emp_firstname']." ".$row['emp_lastname']; ?></th>
    </thead></table>

    <br>วันที่บันทึก:<br>
    <table border='1'width="40%" bgcolor="#FFFF66">
    <thead>
        <th><?php echo $row['date_memo']; ?></th>
    </thead></table>

    <br>สถานะการบันทึก:<br>
    <table border='1'width="40%" bgcolor="#FFFF66">
    <thead>
        <th><?php echo $row['status_name']; ?></th>
    </thead></table>

    <br>ข้อความ:<br>
    <table border='1'width="40%" bgcolor="#FFFF66">
    <thead>
        <th><?php echo $row['message_memo']; ?></th>
    </thead></table>

  </form></center>

</div>

<?php
        }
  ?>  

    <br>
    <center>
    <form action="index.php">
        <input type="submit" value="ย้อนกลับ" style="width:7.5%">
	</form></center>
    <br>
    <br>
    <br>
    <?php
require "../footer.ini.php";