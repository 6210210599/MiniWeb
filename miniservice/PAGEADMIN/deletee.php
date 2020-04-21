<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <mata chaset="utf8">
    <title>Document1</title>
</head>
<body>
<?php
require 'config.inc.php';
$delete = $_POST['submit'];

$sql = "DELETE from tblemployee where emp_id = '".$delete."'";
$rusult = mysqli_query($con,$sql);

if($rusult){
    echo "<script>alert('ลบข้อมูลสำเร็จแล้ววว ID $delete !!');
    window.location='show_emp.php';</script>)";
}
else {
    echo "<script>alert('ลบข้อมูลไม่สำเร็จ');
    window.location='show_emp.php';</script>";
}
?>
</body>
</html>