<?php 
$video = mysqli_query($mysqli,"SELECT * FROM tblvideo");
?>
<script type="text/javascript">
function popup(url,name,windowWidth,windowHeight){    
	myleft=(screen.width)?(screen.width-windowWidth)/2:100;	
	mytop=(screen.height)?(screen.height-windowHeight)/2:100;	
	properties = "width="+windowWidth+",height="+windowHeight;
	properties +=",scrollbars=yes, top="+mytop+",left="+myleft;   
	window.open(url,name,properties);
}
</script><br>
<center><h1>วิดีโอแก้ไขปัญหาเบื้องต้น</h1><br></center>
<center><table border="0" style="width: 60%">
    <thead>
        <th style="width: 5%">ลำดับ</th>
        <th style="width: 55%">เรื่อง</th>
        <th colspan="3" style="width: 20%">เลือก</th>
    </thead>
    <tbody>
    <tr><td colspan="5"><hr /></td></tr>
        <?php 
        $number = 0;
        while($videorow = $video->fetch_assoc()){
            $number += 1;
            $videoid = $videorow["video_id"];
            $name = $videorow["video_name"];
            echo "<tr>";
            echo "<td><center>".$number."</center></td>";
            echo "<td>".$videorow["video_name"]."<br></td>";
            ?>
            <td>
            <a href="javascript:popup('PAGEVIDEO/showdetail.php?txt_id=<?php echo $videoid; ?>','',900,700)" ><font color="blue"><center> [ รายละเอียด ] </center></font></a>
            </td>
            <form action="PAGEVIDEO/DelV.php"  method="POST">
                <input type="hidden" name="select" value=<?php echo $videoid; ?>>
                <td><center><input type="submit" name="del" value="ลบ" style="width:50"onClick="return confirm('คุณต้องการที่จะลบข้อมูลนี้หรือไม่ ?');"></td>
            </form>
            <form action="javascript:popup('PAGEVIDEO/EditVideo.php?txt_id=<?php echo $videoid; ?>','',900,700)" method="POST">
                <td><center><input type="submit" name="edit" value = "แก้ไข"style="width:50"></td>
            </form>
            <?php
            echo "</tr>";
            echo "<tr><td colspan=5><hr /></td></tr>";
        }
        ?>
    </tbody>
</table></center><br>
<a href="javascript:popup('PAGEVIDEO/Addvideo.php?txt_id=<?php echo "Addvideo"; ?>','',800,700)" ><font color="blue"><center> >> [ เพิ่ม ] << </center></font></a>