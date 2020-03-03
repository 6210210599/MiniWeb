<?php
    require "header.php";
?>
<?php 
$job = mysqli_query($mysqli,
		"SELECT * FROM tbljob WHERE job_id = '".$_POST['select']."'");
	while($jobrow = $job->fetch_assoc()){
		$jobid = $jobrow["job_id"];
		$cusid = $jobrow["cus_id"];
		$sn = $jobrow["sn"];
		$type_product = $jobrow["type_product"];
		$product_name = $jobrow["product_name"];
		$product_model = $jobrow["product_model"];
		$accessory = $jobrow["accessory"];
		$symptoms = $jobrow["symptoms"];
		$image_accessory = $jobrow["image_accessory"];
		$status_job = $jobrow["status_job"];
		$date_jobstart = $jobrow["date_jobstart"];
	}
$cus = mysqli_query($mysqli,
		"SELECT * FROM tblcustomer WHERE cus_id = '".$cusid."'");
	while($cusrow = $cus->fetch_assoc()){
		$cusid = $cusrow["cus_id"];
		$cus_id_card = $cusrow["cus_id_card"];
		$cus_prefix = $cusrow["cus_prefix"];
		$cus_firstname = $cusrow["cus_firstname"];
		$cus_lastname = $cusrow["cus_lastname"];
		$cus_phoneno = $cusrow["cus_phoneno"];
		$cus_email = $cusrow["cus_email"];
		$cus_password = $cusrow["cus_password"]; }
if(isset($_POST['save2'])){
    
    $job_id = $_POST['select'];
    $job_listprice = $_POST['job_listprice'];
    $job_price = $_POST['job_price'];
    $emp_id = "EMP1";
    
    $jostinsert = $mysqli->query("INSERT INTO tbljobcost (job_id,emp_id,costservice,list) 
    VALUES ('$job_id','$emp_id','$job_price','$job_listprice')");}
?>

<H1>รายละเอียดข้อมูลการซ่อม</H1><hr />
<table style="width:100%" border="0px" >
	<tr>
        <td colspan="5"><H3>รายละเอียดผู้แจ้งซ่อม</H3><hr /></td>
    </tr>
    <tr>
        <td style="width:20%">รหัสลูกค้า</td>
        <td style="width:20%"><input type="text" name="cus_id" value="<?php echo $cusid ?>"disabled></td>
        <td style="width:20%">เบอร์โทร</td>
        <td style="width:20%"><input type="text" name="cus_tell" value="<?php echo $cus_phoneno ?>"disabled></td>
        <td style="width:20%">&nbsp;</td>
    </tr>
    
    <tr>
        <td style="width:20%">ชื่อลูกค้า</td>
        <td style="width:20%"><input type="text" name="cus_name" value="<?php echo $cus_firstname." ".$cus_lastname ?>"disabled></td>
        <td style="width:20%">อีเมล</td>
        <td style="width:20%"><input type="text" name="cus_email" value="<?php echo $cus_email ?>"disabled></td>
        <td style="width:20%">&nbsp;</td>
    </tr>
    <tr>
        <td style="width:20%">เลขบัตรประชาชน</td>
        <td style="width:20%"><input type="text" name="cus_id_card" value="<?php echo $cus_id_card ?>"disabled></td>
        <td style="width:20%">&nbsp;</td>
        <td style="width:20%">&nbsp;</td>
        <td style="width:20%">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="5">&nbsp;</td>
    </tr>
	<tr>
        <td colspan="5"><H3>รายละเอียดการซ่อม</H3><hr /></td>
    </tr>
    <tr>
        <td style="width:20%">รหัสงาน</td>
        <td style="width:20%"><input type="text" name="job_id" value="<?php echo $jobid ?>"disabled></td>
        <td style="width:20%">อุปกรณ์ที่นำมา</td>
        <td style="width:20%" rowspan="2">
        	<textarea name="acc" rows="3" cols="35" value=""disabled><?php echo $accessory ?></textarea></td>
        <td style="width:20%">&nbsp;</td>
    </tr>
    <tr>
        <td style="width:20%">หมายเลขผลิตภัณฑ์</td>
        <td style="width:20%"><input type="text"  name="job_serial" value="<?php echo $sn ?>"disabled></td>
        <td style="width:20%">&nbsp;</td>
        <td style="width:20%">&nbsp;</td>
    </tr>
    <tr>
        <td style="width:20%">ประเภทสินค้า</td>
        <td style="width:20%">
        	<input type="text"  name="type_product" value="<?php echo $type_product ?>"disabled>
            
        </td>
        <td style="width:20%">&nbsp;</td>
        <td style="width:20%">&nbsp;</td>
        <td style="width:20%">&nbsp;</td>
    </tr>
    <tr>
        <td style="width:20%">ยี่ห้อ</td>
        <td style="width:20%"><input type="text" name="job_brand" value="<?php echo $product_name ?>"disabled></td>
        <td style="width:20%">อาการ</td>
        <td style="width:20%" rowspan="2">
        	<textarea name="acc" rows="3" cols="35" value=""disabled><?php echo $symptoms ?></textarea></td>
        <td style="width:20%">&nbsp;</td>
    </tr>
    <tr>
        <td style="width:20%">รุ่น</td>
        <td style="width:20%"><input type="text" name="job_model" value="<?php echo $product_model ?>"disabled></td>
        <td style="width:20%">&nbsp;</td>
        <td style="width:20%">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="5">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="5"><H3>รายละเอียดการดำเนินการ</H3><hr/></td>
    </tr>
    <tr>
        <td colspan="6">
            <table style="width:50%" border="1px" >
                <tr>
                	<th>รหัสงาน</th>
                    <th>ชื่อผู้ดำเนินการ</th>
                    <th>สถานะงาน</th>
                    <th>วันที่</th>
                </tr>
            </table>
        </td>
    </tr>
    
    <tr>
        <td colspan="5">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="5"><H3>ประเมินราคาซ่อม</H3><hr/></td>
    </tr>
    <tr>
        <td colspan="6">
            <table style="width:50%" border="1px" >
                <tr>
                	<th>ลำดับ</th>
                    <th>รายการ</th>
                    <th>ค่าบริการ</th>
                </tr>
                <?php  
					$cost = mysqli_query($mysqli,
					"SELECT * FROM tbljobcost WHERE job_id = '".$_POST['select']."'");
					$n = 0;
					while($rowcost = $cost->fetch_assoc()){
					
					$n = $n + 1;
				    echo "<tr>";
				    echo "<td>".$n."</td>";
				    echo "<td>".$rowcost["list"]."</td>";
				    echo "<td>".$rowcost["costservice"]."</td>";
				    echo "</tr>";
						}
                ?>
            </table>
        </td>
    </tr>
    
    <tr>
        <td colspan="5">
            <table style="width:50%" border="0px">
                <tr>
                    <td style="width:25%">ยอดรวม</td>
                    <td style="width:25%">-</td>
                    <td style="width:25%">บาท</td>
                </tr>
            </table>
        </td>
    </form>
    </tr>
    <tr>
        <td colspan="5">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="5"><H3>บันทึกข้อความ</H3><hr/></td>
    </tr>
    <tr>
        <td colspan="5">
            <table style="width:75%" border="1px">
                <tr>
                    <th style="width:15%">รหัสงาน</th>
                    <th style="width:20%">ชื่อผู้ดำเนินการ</th>
                    <th style="width:15%">วันที่</th>
                    <th style="width:15%">สถานะ</th>
                    <th style="width:35%">ข้อความที่บันทึก</th>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="5">
            <table style="width:50%" border="0px">
                <tr>
                    <td style="width:20%">บันทึก</td>
                    <td style="width:20%">
                        <select name="type">
                            <option value=" "> </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td style="width:20%"><input type="text" name="job_memo" value="-"></td>
                    <td style="width:20%"><button type="button">บันทึก</button></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td style="width:20%">&nbsp;</td>
        <td style="width:20%">&nbsp;</td>
        <td style="width:20%">&nbsp;</td>
        <td style="width:20%">&nbsp;</td>
        <td style="width:20%">&nbsp;</td>
    </tr>
</table>
<?php
require "../footer.ini.php";