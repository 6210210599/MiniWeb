<?php
    require 'header.php';?>
<head>
<title>show_cus</title>
    <link rel="stylesheet">
    <meta charset="utf8">
</head>
<body>
<center><br>
    <table style ="width:95%">
        <th style="height: 50">รหัสลูกค้า</th>
        <th>บัตรประชาชน</th>
        <th>หน้าชื่อ</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>เบอร์โทรศัพท์</th>
        <th>อีเมล</th>
        <th>ชื่อผู้ใช้</th>
        <th>รหัสผ่าน</th>
        <th colspan="2" style="width: 10%">ตัวเลือก</th>
        <tr><td colspan="12"><hr /></td></tr>
        <?php
            require 'config.inc.php';
                $sql = "SELECT *FROM tblcustomer";
                $rusult = mysqli_query($con,$sql);

                if($rusult){
                    while($data = mysqli_fetch_assoc($rusult)){
        ?>
        <tr>
            <td><center><?php echo $data['cus_id']; ?></td>
            <td><?php echo $data['cus_id_card']; ?></td>
            <td><?php echo $data['cus_prefix']; ?></td>
            <td><?php echo $data['cus_firstname']; ?></td>
            <td><?php echo $data['cus_lastname']; ?></td>
            <td><?php echo $data['cus_phoneno']; ?></td>
            <td><?php echo $data['cus_email']; ?></td>
            <td><?php echo $data['cus_username']; ?></td>
            <td><?php echo $data['cus_password']; ?></td>
            <td>
            <form method="post" action="solvee.php">
                <input type="hidden" name="ID" value="<?php echo $data['cus_id']; ?>">
                <input type="hidden" name="username" value="<?php echo $data['cus_username']; ?>">
                <input type="hidden" name="password" value="<?php echo $data['cus_password']; ?>">
                <input type="submit" value="แก้ไข "style="width:100%">
                </form>
                </td>
                <td>
                <form method="post" action="delete.php">
                <button name="submit" value="<?php echo $data['cus_id']; ?>"onclick="return confirm('ลบรายการนี้หรือไม่ ?')" style="width:100%" >ลบ</button>
                </form>
            </td>
            </tr> 
                <?php }
            }
            else{
                echo "No i am";
            }
        ?>
    </table>
    <br>
    <form action="member_cus.php" method="POST">
        <input type="submit" name="select" value = "สมัครสมาชิก"style="width:50%">
    </form>
</body>
