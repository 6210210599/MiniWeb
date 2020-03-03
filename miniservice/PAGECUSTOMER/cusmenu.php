<?php session_start(); 

?>
<html lang="en">
<head>
    <meta charset="UTF-B">
    <meta name="viewport" charset="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Computibio" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
    <link rel="stylesheet" href="../css/menu.css">
</head>
<body>
    <nav>
        <ul class="menu">
            <li class="logo"><a href="#">Mini Service</a></li>
            <li class="item"><a href="index.php">หน้าแรก</a></li>
            <li class="item"><a href="insertrepair.php">แจ้งซ่อม</a></li>
            <li class="item"><a href="Show_data.php"><?php echo $_SESSION["cus_firstname"]." ".$_SESSION["cus_lastname"]; ?></a></li> <!-- ไป หน้าแก้ไขข้อมูลส่วนตัว-->
            <li class="item button"><a href="../index.php">ลงชื่อออก</a></li>
            <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
        </ul>
    </nav>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../js/menu.js"></script>