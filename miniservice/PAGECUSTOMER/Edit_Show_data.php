<?php 
require 'header.php';
$cus = mysqli_query($mysqli,"SELECT * FROM tblcustomer WHERE cus_id_card LIKE '%".$_SESSION["cus_id_card"]."%' ");
    $cusrow = $cus->fetch_assoc();
    $cus_id = $cusrow["cus_id"];
    $cus_id_card = $cusrow["cus_id_card"];
    $cus_prefix = $cusrow["cus_prefix"];
    $cus_firstname = $cusrow["cus_firstname"];
    $cus_lastname = $cusrow["cus_lastname"];
    $cus_phoneno = $cusrow["cus_phoneno"];
    $cus_email = $cusrow["cus_email"];
    $cus_password = $cusrow["cus_password"];	
?>	
<h1><center>ข้อมูลลูกค้า</center></h1>
		<br><br><br>
			<center>
			<table style="width:50%" >
				<form method="post" action="saveEditprofile.php">
				<thead>
					<td> <H3>ข้อมูลลูกค้า<hr /></H3> </td>
				</thead>
				<tbody>
					<tr><td>รหัสลูกค้า</td> <td><input type="text" name="cus_id" required value="<?php echo $cus_id ?>" disabled></td></tr>
					<tr><td>&nbsp;</td> </tr>
					<tr><td> เลขบัตรประชาชน</td> <td><input type="text" name="cus_id_card" required value="<?php echo $cus_id_card ?>"disabled></td></tr>
					<tr><td>&nbsp;</td> </tr>
					<tr><td> คำนำหน้าชื่อ </td> <td><input type="text" name="cus_prefix" required value="<?php echo $cus_prefix ?>"disabled></td></tr>
					<tr><td>&nbsp;</td> </tr>
					<tr><td> ชื่อ</td>    <td><input type="text" name="cus_firstname" required value="<?php echo $cus_firstname ?>"></td></tr> 
					<tr><td>&nbsp;</td> </tr>
					<tr> <td> นามสกุล </td> <td><input type="text" name="cus_lastname" required value="<?php echo $cus_lastname ?>"></td></tr>
					<tr><td>&nbsp;</td> </tr>
					<tr><td> เบอร์โทรศัพท์  </td> <td><input type="text" name="cus_phoneno" required value="<?php echo $cus_phoneno ?>"></td></tr>
					<tr><td>&nbsp;</td> </tr>
					<tr><td> อีเมล </td>   <td><input type="text" name="cus_email" required value="<?php echo $cus_email ?>"></td></tr>
					<tr><td>&nbsp;</td> </tr>
					<tr><td> รหัสผ่าน</td>    <td><input type="text" name="cus_password"required value="<?php echo $cus_password ?>"></td></tr>
					</tbody>
			</table>
			</center>
			<br> <br> <br> <br><br>
			<center>

				<h5><button name="btn" class="button">บันทึกข้อมูล</button></h5>
   				</form>

			</center>
<br> <br> <br><br> <br> <br> <br> <br> <br> <br> <br><br> <br> <br>
		
<?php

require 'footer.php'

?>