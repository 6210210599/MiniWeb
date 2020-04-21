<?php 
    require "../connect_db/config.ini.php";
    $result = mysqli_query($mysqli,"SELECT * FROM tblquestion where question_id = '".$_GET["txt_id"]."'");
?><center>
<table border="0" style="width: 80%">
    <tbody>
        <?php 
            $number = 0;
            
            while($row = $result->fetch_assoc()){
                $Qid = $row['question_id'];
                $number += 1;
                $day = substr($row['questiondate'], 0,10);
                $time = substr($row['questiondate'], 11);
                list($y,$m,$d)=explode('-',$day);
                echo "<tr>";
                echo "<td colspan=2><h2>".$row['question']."</h2></center></td>";
                echo "</tr>";
                echo "<tr><td><hr /></td></tr>";
                echo "<tr>";
                echo "<td>".$row['details']."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>วันที่ ".$d.'/'.$m.'/'.$y." เวลา ".$time."</td>";
                echo "</tr>";
                /*
                $day = substr($row['questiondate'], 0,10);
                $time = substr($row['questiondate'], 11);
                echo "Day : ".$day;
                echo "Time : ".$time;
                */
                
                ?>
                <tr>
                    <td><hr /></td>
                </tr>
    </tbody>
            <?php } ?>
</table></center>