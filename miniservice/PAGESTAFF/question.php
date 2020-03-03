<?php 
    require "header.php";
?>
<title>staff - ข้อมูลลูกค้า</title>
<center>
<h1>ถาม - ตอบ</h1>
</center>
<!-- เพิ่ม ลบ แก้ไข ข้อความ คำตอบ ดึงชื่อผู้ล็อกอิน วันที่  -->
<?php
    $ques = mysqli_query($mysqli,
    "SELECT *
     FROM tblquestion a INNER JOIN tblcustomer b ON b.cus_id = a.cus_id ");
    $n = 0;
    while($quesrow = $ques->fetch_assoc()){
        $n += 1;
        echo "คำถามที่ ".$n." คุณ : ".$quesrow["cus_firstname"]." รหัสสมาชิก : ".$quesrow["cus_id"]."<br>";
        echo "&nbsp&nbsp&nbsp&nbspถาม : ".$quesrow["questiontext"]."<br>";
        $question_id = $quesrow["question_id"];

        $ans = mysqli_query($mysqli,
        "SELECT *
         FROM tblanswer a INNER JOIN tblemployee b ON b.emp_id = a.emp_id WHERE a.question_id = $question_id");
        while($anssrow = $ans->fetch_assoc()){
        echo "&nbsp&nbsp&nbsp&nbspตอบ : ".$anssrow["answer"];
            ?>
        <form action="question.php" method="POST">
            <input type="hidden"  name="del" value=<?php echo $anssrow["question_id"]?>>
            <input type="submit" name="submit" value = "ลบคำตอบ"style="width:5%">  
        </form>
        <?php
         echo "<br>"."ผู้ตอบ : ".$anssrow["emp_firstname"]."&nbsp".$anssrow["dateanswer"];
        echo "<hr>";
        }
    }
?>
<?php
    require "../footer.ini.php";