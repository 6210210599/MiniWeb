<?php 
    require "header.php";
    $result = mysqli_query($mysqli,"SELECT * FROM tblquestion");
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
<h1>&nbsp;&nbsp;&nbsp;คำถามที่พบบ่อย</h1>
<br>
<table border="0" style="width: 55%">
    <thead>
        <th style="width:70%">คำถาม</th>
        <th style="width:15%">เลือก</th>
    </thead>
    <tbody>
        <?php 
            while($row = $result->fetch_assoc()){
                $Qid = $row['question_id'];
                echo "<tr>";
                echo "<td>&nbsp;&nbsp;&nbsp;"."".$row['question']."</td>";
        ?>  
                <td>
                <a href="javascript:popup('detail.php?txt_id=<?php echo $Qid; ?>','',800,600)" ><font color="blue"><center> >> [ รายละเอียด ] << </center></font></a>
                </td>
        <?php
                
                echo "</tr>";
                echo "<tr><td colspan=2><hr /></td></tr>";
            }
        ?>
    </tbody>
</table></center>