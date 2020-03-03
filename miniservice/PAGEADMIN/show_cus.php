<?php
    require "header.php";
    ?>
<center>
<h1>ข้อมูลลูกค้า</h1><br>
<table border="1px" style ="width:100%">
    <th>รหัสลูกค้า</th>
    <th>บัตรประชาชน</th>
    <th>หน้าชื่อ</th>
    <th>ชื่อ</th>
    <th>นามสกุล</th>
    <th>เบอร์โทรศัพท์</th>
    <th>อีเมล</th>
    <th>รหัสผ่าน</th>
    <th>ตัวเลือก</th>
    <th>ตัวเลือก</th>
    <?php
echo "</tr>";  
    ?>
<?php
        $rusult = mysqli_query($mysqli,"SELECT *FROM tblcustomer");

        if($rusult){
            while($data = mysqli_fetch_assoc($rusult)){
                ?>
                <tr>
                    <td>
                       <?php echo $data['cus_id']; ?>
                    </td>
                    <td>
                       <?php echo $data['cus_id_card']; ?>
                    </td>
                    <td>
                       <?php echo $data['cus_prefix']; ?>
                    </td>
                    <td>
                       <?php echo $data['cus_firstname']; ?>
                    </td>
                    <td>
                       <?php echo $data['cus_lastname']; ?>
                    </td>
                    <td>
                       <?php echo $data['cus_phoneno']; ?>
                    </td>
                    <td>
                       <?php echo $data['cus_email']; ?>
                    </td>
                    <td>
                       <?php echo $data['cus_password']; ?>
                    </td>
                    <td>
                    <form method="post" action="editcus.php">
                        <input type="submit" value="แก้ไข "style="width:100%">
                        </form>
                        </td>
                        <td>
                        <form method="post" action="#">
                        <button name="submit" value="<?php echo $data['cus_id']; ?>" style="width:100%" >ลบ</button>
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
<form action="insertcus.php" method="POST">
        <input type="submit" name="select" value = "สมัครสมาชิก"style="width:100%">
         </form>
        <table>
        <tr>
        <td style="width: 100%;"><center>
                <td colspan="3"><br> <br> <br> <br> <br><br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br> <br> <br><br> <br> <br></td>
                </td>
            </tr>
            
            </table>

