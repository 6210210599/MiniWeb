<?php
    require "header.php";
?>
<script type="text/javascript">
function popup(url,name,windowWidth,windowHeight){    
	myleft=(screen.width)?(screen.width-windowWidth)/2:100;	
	mytop=(screen.height)?(screen.height-windowHeight)/2:100;	
	properties = "width="+windowWidth+",height="+windowHeight;
	properties +=",scrollbars=yes, top="+mytop+",left="+myleft;   
	window.open(url,name,properties);
}
</script>
<style type="text/css">
#container{width:90%}
#containerleft{float: left;width:55%;}
#containerright{float: right;width:45%;}
</style>
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
        $date_jobstart = $jobrow["date_jobstart"];
        $image = $jobrow["image"];
        $status_id = $jobrow["status_id"];
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
    $status = mysqli_query($mysqli,"SELECT * FROM tblstatus WHERE status_id = '".$status_id."'");
    while($statusrow = $status->fetch_assoc()){
        $statusname = $statusrow["status_name"];
        }
?>
<center>
<H1>รายละเอียดข้อมูลการซ่อม</H1><hr />

<div id="container">
    <!-- column left-->
    <div id="containerleft">
    <table border="0" style="width:90%">
        <tbody>
            <tr>
                <td style="width:16%"><h2>สถานะงาน</h2></td>
                <td style="width:40%">
                    <table border="1" style="width:100%" cellspacing="0">
                        <tr>
                            <td><center><?php echo $statusname; ?></center></td>
                        </tr>
                    </table>
                </td>
                <?php if($status_id == "6"){ ?>
                    <form action="save_status.php" method="POST">
                        <td style="width:30%">&nbsp;เปลี่ยนสถานะ >> 
                            <input type="hidden"  name="stt5s" value=<?php echo $jobid; ?>>
                            <input type="submit" name="stt5" value="ยืนยันราคา"> 
                        </td>
                    </form>
                <?php
                }else{
                    echo "<td style=width:30%>&nbsp;</td>";
                } ?>
            </tr>
        </tbody>
    </table>
        <table style="width:90%" border="0px" >
            <tr><td style="width:60%"><H3>รายละเอียดผู้แจ้งซ่อม</H3><hr /></td></tr>
            <tr><td>
                    <table style="width:90%" border="0px" >
                        <tr>
                            <td style="width:20%">รหัสลูกค้า</td>
                            <td style="width:20%"><input type="text" style="width:100%" name="cus_id" value="<?php echo $cusid ?>"disabled></td>
                            <td style="width:10%">เบอร์โทร</td>
                            <td style="width:25%"><input type="text" style="width:100%" name="cus_tell" value="<?php echo $cus_phoneno ?>"disabled></td>
                        </tr>
                        <tr>
                            <td>ชื่อลูกค้า</td>
                            <td><input type="text" name="cus_name" style="width:100%" value="<?php echo $cus_firstname." ".$cus_lastname ?>"disabled></td>
                            <td>อีเมล</td>
                            <td><input type="text" name="cus_email" style="width:100%" value="<?php echo $cus_email ?>"disabled></td>
                        </tr>
                        <tr>
                            <td>เลขบัตรประชาชน</td>
                            <td><input type="text" style="width:100%" name="cus_id_card" value="<?php echo $cus_id_card ?>"disabled></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
            </td></tr>
        </table><br>
        <table style="width:90%" border="0px" >
            <tr><td colspan="5"><H3>รายละเอียดการซ่อม</H3><hr /></td></tr>
            <tr><td>
                    <table style="width:100%" border="0px" >
                        <tr>
                            <td style="width:20%">รหัสงาน</td>
                            <td style="width:20%"><input type="text" style="width:100%" name="job_id" value="<?php echo $jobid ?>"disabled></td>
                            <td style="width:20%">อุปกรณ์ที่นำมา</td>
                            <td style="width:20%" rowspan="2"><textarea name="acc" style="width:100%" rows="3" cols="35" value=""disabled><?php echo $accessory ?></textarea></td>
                        </tr>
                        <tr>
                            <td>หมายเลขผลิตภัณฑ์</td>
                            <td><input type="text"style="width:100%" name="job_serial" value="<?php echo $sn ?>"disabled></td>  
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>ประเภทสินค้า</td>
                            <td><input type="text"style="width:100%" name="type_product" value="<?php echo $type_product ?>"disabled></td>
                            <td>อาการ</td>
                            <td rowspan="2"><textarea name="acc" style="width:100%" rows="3" cols="35" value=""disabled><?php echo $symptoms ?></textarea></td>
                        </tr>
                        <tr>
                            <td>ยี่ห้อ</td>
                            <td><input type="text" style="width:100%" name="job_brand" value="<?php echo $product_name ?>"disabled></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>รุ่น</td>
                            <td><input type="text" style="width:100%" name="job_model" value="<?php echo $product_model ?>"disabled></td>
                            <td>&nbsp;</td>
                            <td><a href="javascript:popup('Showimage.php?txt_id=<?php echo $jobid; ?>','',800,600)" ><font color="blue"><center> >> [ ดูรูป ] << </center></font></a></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table><br>
        <table style="width:90%" border="0px" >
            <tr><td colspan="5"><H3>รายละเอียดการดำเนินการ</H3><hr /></td></tr>
            <tr><td>
                    <table style="width:100%" border="1px" cellspacing="0">
                        <th>ชื่อผู้ดำเนินการ</th>
                        <th>สถานะงาน</th>
                        <th>วันที่</th>
                        <tbody>
                            <?php  
                                $jobstatus = mysqli_query($mysqli,
                                "SELECT a.status_id ,b.emp_firstname , b.emp_lastname , a.date , c.status_name FROM tbljobstatus a
                                INNER JOIN tblemployee b ON a.emp_id = b.emp_id
                                INNER JOIN tblstatus c ON c.status_id = a.status_id
                                WHERE job_id = '".$_POST['select']."'");
                                while($rowjobstatus = $jobstatus->fetch_assoc()){
                                    echo "<tr>";
                                    echo "<td><center>".$rowjobstatus["emp_firstname"]." ".$rowjobstatus["emp_lastname"]."</center></td>";
                                    echo "<td><center>".$rowjobstatus["status_name"]."</center></td>";
                                    echo "<td><center>".$rowjobstatus["date"]."</center></td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody> 
                    </table>
            </td></tr>
        </table>
    </div>
    <!-- column right-->
    <div id="containerright">
        <table style="width:100%" border="0px" >
            <tr>
                <td style="width:90%"><H3>ประเมินค่าบริการซ่อม</H3><hr /></td>
            </tr>
            <tr ><td colspan="2">
                    <table style="width:100%" border="1px" cellspacing="0">
                        <th>ลำดับ</th>
                        <th>รายการ</th>
                        <th>ค่าบริการ</th>
                        <tbody>
                            <?php  
                                $cost = mysqli_query($mysqli,
                                "SELECT * FROM tbljobcost WHERE job_id = '".$_POST['select']."'");
                                    $n  = 0;
                                    $sum = 0;
                                        while($rowcost = $cost->fetch_assoc()){
                                            $n = $n + 1;
                                            $sum = $sum + $rowcost["cost"];
                                            echo "<tr>";
                                            echo "<td><center>".$n."</center></td>";
                                            echo "<td><center>".$rowcost["list"]."</center></td>";
                                            echo "<td><center>".$rowcost["cost"]."</center></td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                        }    
                                        echo "<td colspan=3><center>รวม ".$sum." บาท</center></td>";
                                        echo "</tr>";
                            ?>
                            </tbody> 
                    </table>
            </td></tr>
        </table><br>

        <?php 
            if($status_id == "9"){
        ?>
        <table style="width:100%" border="0px" >
            <tr>
                <td><H3>จ่ายเงิน >> <a href="javascript:popup('insertslip.php?txt_id=<?php echo $jobid; ?>','',800,600)" ><font color="blue">  [ คลิก ]  </font></a></td>
            </tr>
        </table>
        <?php
        }
        ?>


        <?php 
            if($status_id == "9" || $status_id == "10"){
        ?>
        <table style="width:100%" border="0px" >
            <tr>
                <td><H3>ดูหลักฐานการโอน <a href="javascript:popup('Showslip.php?txt_id=<?php echo $jobid; ?>','',800,600)" ><font color="blue">  [ คลิก ]  </font></a></td>
            </tr>
        </table>
        <?php
            }
        ?>
        
        
    </div>
</div>
<?php
require "../footer.ini.php";