<?php 
require "header.php";

$con =new mysqli(CONF_DB_HOST,CONF_DB_USERNAME,CONF_DB_PASSWORD,CONF_DB_NAME);


$con->set_charset("utf8");

$sql="UPDATE tbljob SET status_id = '11',date_jobstart = NOW() WHERE job_id = '".$_POST["select1"]."'";
$rusult = mysqli_query($con,$sql);

echo "<script type='text/javascript'>";
echo "alert('ยกเลิกงานแล้ว !!!');";
echo "window.location = '1.Order.php';";
echo "</script>";
?>

<?php
require "../footer.ini.php";