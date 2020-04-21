<link rel="stylesheet" href="../css/menu.css">
    <nav>
        <ul class="menu">
            <li class="logo"><a href="#">เพิ่มค่าบริการ</a></li>
        </ul>
    </nav>
<?php 
require "../connect_db/config.ini.php";/*
$jobid = $_GET["txt_id"];
$job = mysqli_query($mysqli,
		"SELECT * FROM tbljob WHERE job_id = '".$jobid."'");
	while($jobrow = $job->fetch_assoc()){
        $image = $jobrow["image"];
	}*/
   /* echo "<H1>เพิ่มค่าบริการ</H1><hr /><br>";*/
   $่job_id = $_GET["txt_id"];
?>
<center><br>
<table border="0" style="width: 90%">
    <tr><td>
    <form action="save_insertcost.php" method="POST">
    รายการ<br/>
    <input type="text" name="list" required><br/><br/>
    ค่าบริการ<br/>
    <input type="number" name="cost" maxlength="25" required><br/><br/>
    <input type="hidden"  name="select" value=<?php echo $่job_id;?>>
        <input type="submit" name="submit" value = "บันทึก"style="width:20%"> 
    </form>
    </td></tr>
</table>