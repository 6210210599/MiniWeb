<?php
    require "header.php";
    ?>
<center>
<h1>ข้อมูลพนักงาน</h1><br>
<table border="1px" style ="width:100%">
    <th>รหัสพนักงาน</th>
    <th>บัตรประชาชน</th>
    <th>หน้าชื่อ</th>
    <th>ชื่อ</th>
    <th>นามสกุล</th>
    <th>เบอร์โทรศัพท์</th>
    <th>อีเมล</th>
    <th>ตำแหน่ง</th>
    <th>ชื่อผู้ใช้</th>
    <th>รหัสผ่าน</th>
    <th>ตัวเลือก</th>
    
    <?php
 echo "</tr>";
        
    ?>
<?php
        $rusult = mysqli_query($mysqli,"SELECT a.emp_id , a.emp_id_card , a.emp_prefix , a.emp_firstname , a.emp_lastname , a.emp_phoneno , a.emp_email , 
        b.position_name , a.emp_username , a.emp_password  FROM tblemployee a INNER JOIN tblposition b ON a.position_id = b.position_id");

        if($rusult){
            while($data = mysqli_fetch_assoc($rusult)){
                ?>
                <tr>
                    <td>
                       <?php echo $data['emp_id']; ?>
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
                       <?php echo $data['position_name']; ?>
                    </td>
                    <td>
                       <?php echo $data['emp_username']; ?>
                    </td>
                    <td>
                       <?php echo $data['emp_password']; ?>
                    </td>
                    <td>
                    <form method="post" action="editemp.php">
                        <input type="submit" value="แก้ไข "style="width:100%">
                        </form>
                        <form method="post" action="#">
                        <button name="submit" value="<?php echo $data['emp_id']; ?>" style="width:100%" >ลบ</button>
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
<table border="1">
</table> 
<form action="insertemp.php" method="POST">
        <input type="submit" name="select" value = "สมัครสมาชิก"style="width:100%">
        </form> 
        <table>
        <tr>
        <td style="width: 100%;"><center>
                <td colspan="3"><br> <br> <br> <br> <br><br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br> <br> <br><br> <br> <br></td>
                </td>
            </tr>
            </table>

