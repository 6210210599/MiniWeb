<?php
    require 'header.php';?>
<head>
    <title>show_emp</title>
    <link rel="stylesheet">
</head>
<body>
<center><br>
<table border="0px" style ="width:95%">
    <th style="height: 50">รหัสพนักงาน</th>
    <th>บัตรประชาชน</th>
    <th>หน้าชื่อ</th>
    <th>ชื่อ</th>
    <th>นามสกุล</th>
    <th>เบอร์โทรศัพท์</th>
    <th>อีเมล</th>
    <th>ตำแหน่ง</th>
    <th>ชื่อผู้ใช้</th>
    <th>รหัสผ่าน</th>
    <th colspan="2" style="width: 10%">ตัวเลือก</th>
    <tr><td colspan="12"><hr /></td></tr>
<?php
    require 'config.inc.php';
        $sql = "SELECT * FROM tblemployee where position_id != '1'";
        $rusult = mysqli_query($con,$sql);
        /*USER ADMIN Top record*/
        $admin = "SELECT * FROM tblemployee where position_id = '1'";
        $dataadmin = mysqli_query($con,$admin);
        ?>
        <?php 
        while($dadmin = mysqli_fetch_assoc($dataadmin)){
        ?>
        <tr>
            <td><center><?php echo $dadmin['emp_id']; ?></td>
            <td><?php echo $dadmin['emp_id_card']; ?></td>
            <td><?php echo $dadmin['emp_prefix']; ?></td>
            <td><?php echo $dadmin['emp_firstname']; ?></td>
            <td><?php echo $dadmin['emp_lastname']; ?>
            </td>
            <td><?php echo $dadmin['emp_phoneno']; ?></td>
            <td><?php echo $dadmin['emp_email']; ?></td>
            <td>
            <?php
                $position = $dadmin['position_id'];
                if ($position == "1") {
                    echo "ผู้ดูแลระบบ";
                } elseif ($position == "2") {
                    echo "พนักงานหน้าร้าน";
                } elseif ($position == "3") {
                    echo "พนักงานซ่อม";
                } else {
                    echo "ไม่มีตำแหน่ง";
                }
                ?>
            </td>
            <td><?php echo $dadmin['emp_username']; ?></td>
            <td><?php echo $dadmin['emp_password']; ?></td>
        </tr>      
        <?php }?>
        <?php 

        if($rusult){
            while($data = mysqli_fetch_assoc($rusult)){
                ?>
                <tr>
                    <td>
                    <center><?php echo $data['emp_id']; ?>
                    </td>
                    <td>
                       <?php echo $data['emp_id_card']; ?>
                    </td>
                    <td>
                       <?php echo $data['emp_prefix']; ?>
                    </td>
                    <td>
                       <?php echo $data['emp_firstname']; ?>
                    </td>
                    <td>
                       <?php echo $data['emp_lastname']; ?>
                    </td>
                    <td>
                       <?php echo $data['emp_phoneno']; ?>
                    </td>
                    <td>
                       <?php echo $data['emp_email']; ?>
                    </td>
                    <td>
                    <?php
                        $position = $data['position_id'];

                        if ($position == "1") {
                            echo "ผู้ดูแลระบบ";
                        } elseif ($position == "2") {
                            echo "พนักงานหน้าร้าน";
                        } elseif ($position == "3") {
                            echo "พนักงานซ่อม";
                        } else {
                            echo "ไม่มีตำแหน่ง";
                        }
                        ?>
                    </td>
                    <td>
                       <?php echo $data['emp_username']; ?>
                    </td>
                    <td>
                       <?php echo $data['emp_password']; ?>
                    </td>
                    <td>
                    <form method="post" action="solve.php">
                    <input type="hidden" name="ID" value="<?php echo $data['emp_id']; ?>">
                        <input type="submit" value="แก้ไข "style="width:100%">
                        </form>
                        </td>
                        <td>
                        <?php 
                            if($position != "1"){

                                ?>
                                <form method="post" action="deletee.php">
                        <button name="submit" value="<?php echo $data['emp_id']; ?>" onclick="return confirm('ลบรายการนี้หรือไม่ ?')" style="width:100%" >ลบ</button>
                        </form>
                                <?php
                            }
                        ?>
                        

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
<form action="staff_emp.php" method="POST">
        <input type="submit" name="select" value = "สมัครสมาชิก"style="width:50%">
</form> 
<center>
</body>
</html>
