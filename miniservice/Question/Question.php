<?php 
    require "../../connect_db/config.ini.php";
    $result = mysqli_query($mysqli,"SELECT * FROM tblquestion");
    $user = 'cus';
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
<center><h1>คำถามที่พบบ่อย</h1>
<?php if($user == 'EMP'){ ?>
<a href="javascript:popup('AddQ.php?txt_id=<?php echo "AddQ"; ?>','',900,700)" ><font color="blue"><center> > [ เพิ่ม ] < </center></font></a>
<?php }?>
<br>
<table border="1" style="width: 80%">
    <thead>
        <th style="width: 5%">ลำดับ</th>
        <th style="width: 50%">คำถาม</th>
        <th style="width: 20%">วันที่</th>
        <?php 
        
            if($user == 'cus'){
                echo "<th style=width: 20%>เลือก</th>";
            }else{
                echo "<th colspan=3style=width: 20%>เลือก</th>";
            }
        ?>
    </thead>
    <tbody>
        <?php 
            $number = 0;
            while($row = $result->fetch_assoc()){
                $Qid = $row['question_id'];
                $number += 1;
                echo "<tr>";
                echo "<td>"."<center>".$number."</td>";
                echo "<td>"."".$row['question']."</td>";
                echo "<td>"."<center>".$row['questiondate']."</td>";
        ?>
                <td>
                <a href="javascript:popup('detail.php?txt_id=<?php echo $Qid; ?>','',800,600)" ><font color="blue"><center> >> [ รายละเอียด ] << </center></font></a>
                </td>
        <?php
                if($user == 'EMP'){
                    ?>
                    <form action="DelQ.php"  method="POST">
                    <input type="hidden" name="select" value=<?php echo $Qid; ?>>
                    <td><center><input type="submit" name="del" value="ลบ" style="width:50"onClick="return confirm('คุณต้องการที่จะลบข้อมูลนี้หรือไม่ ?');"></td>
                    </form>
                    <form action="javascript:popup('EditQ.php?txt_id=<?php echo $Qid; ?>','',900,700)" method="POST">
                    <td><center><input type="submit" name="edit" value = "แก้ไข"style="width:50"></td>
                    </form>
                <?php
                }
                echo "</tr>";
            }
        ?>
    </tbody>
</table></center>