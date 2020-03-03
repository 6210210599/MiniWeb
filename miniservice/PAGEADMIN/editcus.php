<?php
require "header.php";


if(isset($_POST['submit'])){
    $id = $_POST["ID"];
    $id_card = $_POST["id_card"];
    $prefix = $_POST["prefix"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phone = $_POST["phone"];
    $emil = $_POST["email"];
    $password = $_POST["password"];
    $sql = "INSERT INTO tblcustomer(cus_id,cus_id_card,cus_prefix,cus_firstname,cus_lastname,cus_phone,cus_email,cus_password) values ('$id','$id_card','$prefix','$firstname','$lastname','$phone','$emil','$password')"; 
    $result = mysqli_query($con,$sql);

    if($result == TRUE){
        echo "<script>alert('แก้ไขเรียบร้อยแล้ว ID $id !')</script>)";
    }
    else{
        echo "ERORR";
    }
}
?>

<table style="width:100%;" border="0px">
    <tr>
        <td colspan="4"><center><H3><br>แก้ไขข้อมูลลูกค้า</H3></center></td>
    </tr>
    <center>
    <tr>
    <th colspan="4">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <br>
        ID  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input name="ID" type="text" required>  
        <br><br> 
        ID Card   &nbsp; <input name="id_card" type="text" required>
        <br><br>
        Prefix  &nbsp; &nbsp; &nbsp; &nbsp;<input name="prefix" type="text" required>
        <br><br>
        Firstname <input name="firstname" type="text" required>
        <br><br>
        Lastname <input name="lastname" type="text" required>
        <br><br>
        Phone &nbsp; &nbsp; <input name="phone" type="text" required>
        <br><br>
        Email  &nbsp; &nbsp; &nbsp; <input name="email" type="text" required>
        <br><br>
        Password <input name="password" type="text" required>
        <br><br>
        <input name="submit"type="submit" value = "ยืนยันการแก้ไข">
    </form>
    </th>
    </tr>
    </center>

<tr>
    <td colspan="4"><br> <br> <br> <br> <br><br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br> <br> <br><br> <br> <br></td>
</tr>
<tr>
    
    <td colspan="4" bgcolor="#C1FFB8"><center>
    COMPUTER AND SERVICE<br>
    HATYAI SONGKHLA 90110<br>
    TELL : 084-999-9999<br>
    E-MAIL : COMPUTERANDSERVICE@gmail.com

    </td>
</tr>
</table>

