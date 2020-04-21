<?php 
require "header.php";

$cus = mysqli_query($mysqli,
"UPDATE tblcustomer set cus_firstname = '".$_POST['cus_firstname']."', 
cus_lastname = '".$_POST['cus_lastname']."', cus_phoneno = '".$_POST['cus_phoneno']."' 
,cus_email = '".$_POST['cus_email']."', cus_password = '".$_POST['cus_password']."'   
where cus_id = '".$_SESSION["cus_id"]."' ");

echo "<meta http-equiv='refresh'content='0;url=Show_data.php'>";

?>