<?php 
    require "header.php";
?>
<form action="save_insertrepair.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">
<h1><center>หน้าการแจ้งซ่อม</center></h1>
<br><br><br>
    <center>
    <table style="width:50%" >
        <thead>
            <td> <H3>ข้อมูลอุปกรณ์<hr /></H3> </td>
        </thead>
        <tbody >
            <tr> <td> ประเภทสินค้า </td> 
            <td style="width:20%">
            <select name="type" required>
                <option value=""> </option>
                <option value="NOTEBOOK">NOTEBOOK</option>
                <option value="PC">PC</option>
            </select><br/></tr>
            <tr><td> ชื่อสินค้า  </td>      <td style="width:20%"><input type="text" name="name" placeholder="กรุณาใส่รายละเอียด.."></td> </tr>
            <tr><td> รุ่น </td>       <td style="width:20%"><input type="text" name="model" placeholder="กรุณาใส่รายละเอียด.."></td> </tr>
            <tr><td> หมายเลขผลิตภัณฑ์</td>    <td style="width:20%"><input type="text" name="sn" placeholder="กรุณาใส่รายละเอียด.."></td> </tr>
            <tr><td> อุปกรณ์ที่นำมา</td>    <td style="width:20%"><input type="text" name="acc" placeholder="กรุณาใส่รายละเอียด.."></td> </tr>  
            <tr><td>&nbsp;</td> </tr>
            <tr><td>&nbsp;</td> </tr>
            <tr><td>&nbsp;</td> </tr>
        </tbody>
        <thead>
            <td><H3>รูปภาพอุปกรณ์ที่จะทำการซ่อม<hr/></H3></td>
        </thead>
        <tbody >
        
            <tr><td><input type="file" name="fileupload" id="fileupload"  required="required"/></td></tr>
           

            <tr><td>&nbsp;</td> </tr>
            <tr><td>&nbsp;</td> </tr>
            <tr><td>&nbsp;</td> </tr>
        </tbody>
        <thead>
            <td> <H3>บอกอาการเสียอย่างละเอียด<hr /></H3> </td>
        </thead>
        <tbody >   
            <td style="width:20%" rowspan="5"><textarea name="sym" rows="5" cols="35"placeholder="กรุณาใส่รายละเอียด.."></textarea></td></tr>
            <tr><td>&nbsp;</td> </tr>
            <tr><td>&nbsp;</td> </tr>
            <tr><td>&nbsp;</td> </tr>
        </tbody>
        <tbody >
            <tr><td>&nbsp;</td> </tr>
            <tr><td> <input type="submit" name="submit" value="บันทึก"></td></tr>
        </tbody>
   </table>
    </center>
        <br> <br> <br><br> <br> <br> <br> <br> <br> <br> <br><br> <br> <br>
</form>
<?php 
    require "../footer.ini.php";