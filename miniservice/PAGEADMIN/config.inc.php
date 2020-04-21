<?php
$con = mysqli_connect("localhost","root","","miniservice");
mysqli_set_charset($con,"utf8");
if ($con == FALSE)
    echo "ไม่สำเร็จ" ;
?>