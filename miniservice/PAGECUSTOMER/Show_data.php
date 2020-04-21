<?php 
require 'header.php' 
?> 
<?php 
$result = mysqli_query($mysqli,"SELECT * from tblcustomer WHERE cus_id LIKE '%".$_SESSION["cus_id"]."%' ");
if(!$result){
  echo "Error";
}
?>
<?php
while($show = mysqli_fetch_assoc($result)){
?> 
<h1><center>ข้อมูลลูกค้า</center></h1>

		<br><br><br>
			<center>
			<table style="width:50%" border="0px">
				<thead>
					<td> <H3>ข้อมูลลูกค้า<hr /></H3> </td>
				</thead>
				<tbody>
					<tr><td> เลขบัตรประชาชน</td> <td><?php echo $show['cus_id_card'] ?></td></tr>
					<tr><td>&nbsp;</td> </tr>
					<tr><td> คำนำหน้าชื่อ </td> <td><?php echo	$show['cus_prefix'] ?></td></tr>
					<tr><td>&nbsp;</td> </tr>
					<tr><td> ชื่อ</td>    <td><?php echo $show['cus_firstname'] ?></td></tr> 
					<tr><td>&nbsp;</td> </tr>
					<tr> <td> นามสกุล </td> <td><?php echo $show['cus_lastname'] ?></td></tr>
					<tr><td>&nbsp;</td> </tr>
					<tr><td> เบอร์โทรศัพท์  </td> <td><?php echo $show['cus_phoneno'] ?></td></tr>
					<tr><td>&nbsp;</td> </tr>
					<tr><td> อีเมล </td>   <td><?php echo $show['cus_email'] ?></td></tr>
					<tr><td>&nbsp;</td> </tr>
					<tr><td> รหัสผ่าน</td>    <td><?php echo $show['cus_password'] ?></td></tr>				
				</tbody>	
			</table>
			</center>
 			<br> <br> <br> <br><br>
			<center>
			<table style="width:50%" >
				<tbody>
				<form method="POST" action="Edit_Show_data.php">
    			<input type="hidden" name="h_id" value="<?php echo $show['cus_id']; ?>">
    			<button class="button button5">แก้ไขข้อมูล</button>	
    			</form>
				</tbody>
			<?php	
			}	
			?>
			</table>
			</center>
				 <br> <br> <br><br> <br> <br> <br> <br> <br> <br> <br><br> <br> <br>	
<?php
require 'footer.php';
?>