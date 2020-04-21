<?php 
    require "../../connect_db/config.ini.php";
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
                list($y,$m,$d)=explode('-',$day);
                echo "<tr><td colspan=2><h2>".$row['question']."</h2></center></td></tr>";
                echo "<tr><td><hr /></td></tr>";
                echo "<tr><td>".$row['details']."</td></tr>";
                echo "<tr><td align=right>วันที่ ".$d.'/'.$m.'/'.$y."</td></tr>";
                ?>
                <tr>
                    <td><hr /></td>
                </tr>
    </tbody>
            <?php } ?>
</table></center>