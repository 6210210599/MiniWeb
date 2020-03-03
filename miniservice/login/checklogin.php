<?php session_start(); 
    require "../connect_db/config.ini.php";
$mysqli = new mysqli(CONF_DB_HOST, CONF_DB_USERNAME, CONF_DB_PASSWORD, CONF_DB_NAME);
$checkcus = mysqli_query($mysqli,
"SELECT *
FROM tblcustomer WHERE cus_username LIKE '%".$_POST['username']."%' ");

if(!$row = $checkcus->fetch_assoc()){
    $checkemp = mysqli_query($mysqli,"SELECT * FROM tblemployee WHERE emp_username LIKE '%".$_POST['username']."%' ");
    if(!$row = $checkemp->fetch_assoc()){
        echo "ไม่พบชื่อผู้ใช้";
        echo "<meta http-equiv='refresh'content='2;url=../index.php'>";
    }else{
        if($_POST['password'] == $row['emp_password']){
            $_SESSION["emp_id_card"] = $row['emp_id_card'];
            $_SESSION["emp_firstname"] = $row['emp_firstname'];
            $_SESSION["emp_lastname"] = $row['emp_lastname'];
            $_SESSION["userpassword"] = $row['emp_password'];
            echo "ถูกต้อง";
            if($row['position_id'] == "1"){
                    echo "<meta http-equiv='refresh'content='0;url=../PAGEADMIN/index.php'>";
            }elseif($row['position_id'] == "2"){
                    echo "<meta http-equiv='refresh'content='0;url=../PAGESTAFF/index.php'>";
            }else{
                    echo "<meta http-equiv='refresh'content='0;url=../PAGEREPAIRSTAFF/index.php'>";
            }
        }else{
            echo "รหัสผ่านไม่ถูกต้อง";
            echo "<meta http-equiv='refresh'content='2;url=../index.php'>";
        }
    }

}else{
    if($_POST['password'] == $row['cus_password']){
        $_SESSION["cus_id_card"] = $row['cus_id_card'];
        $_SESSION["cus_firstname"] = $row['cus_firstname'];
        $_SESSION["cus_lastname"] = $row['cus_lastname'];
        $_SESSION["userpassword"] = $row['cus_password'];
        echo "ถูกต้อง";
        echo "<meta http-equiv='refresh'content='0;url=PAGECUSTOMER/index.php'>";
            
    }else{
        echo "รหัสผ่านไม่ถูกต้อง";
        echo "<meta http-equiv='refresh'content='2;url=index.php'>";
    }
}

/*
    if($_POST['position'] == "C"){
        echo "รอ";
        echo "<meta http-equiv='refresh'content='0;url=PAGECUSTOMER/index.php'>";
    }elseif($_POST['position'] == "A"){
        echo "รอ";
        echo "<meta http-equiv='refresh'content='0;url=PAGEADMIN/index.php'>";
    }elseif($_POST['position'] == "R"){
        echo "รอ";
        echo "<meta http-equiv='refresh'content='0;url=PAGEREPAIRSTAFF/index.php'>";
    }elseif($_POST['position'] == "S"){
        echo "รอ";
        echo "<meta http-equiv='refresh'content='0;url=PAGESTAFF/index.php'>";
    }else {
        echo "f";
        echo "<script>";  
        echo "alert( 'ไม่มีสิทธิ์'  );"; 
        echo "window.history.back()";
        echo "</script>";
        }
/*
while($row = $checklog->fetch_assoc()){
    $_SESSION["sess_cus_password"] = $row["cus_password"]; }*/ 
    /*
    while($row = $checklog->fetch_assoc()){
        if($_POST['password'] == $row["cus_password"]){
            if($_POST['position'] == "C"){
                $_SESSION["sescusid"] = $row["cus_id"];
                echo "รอ";
                echo "<meta http-equiv='refresh'content='0;url=PAGECUSTOMER/index.php'>";
            }elseif($_POST['position'] == "A"){
                echo "รอ";
                echo "<meta http-equiv='refresh'content='0;url=PAGEADMIN/index.php'>";
            }elseif($_POST['position'] == "R"){
                echo "รอ";
                echo "<meta http-equiv='refresh'content='0;url=PAGEREPAIRSTAFF/index.php'>";
            }elseif($_POST['position'] == "S"){
                echo "รอ";
                echo "<meta http-equiv='refresh'content='0;url=PAGESTAFF/index.php'>";
            }else {
                echo "f";
                echo "<script>";  
                echo "alert( 'ไม่มีสิทธิ์'  );"; 
                echo "window.history.back()";
                echo "</script>";
                }
        }else{
                echo "<script>";  
                echo "alert( 'user หรือ  password ไม่ถูกต้อง'  );"; 
                echo "window.history.back()";
                echo "</script>";
        }
    
        
    }*/
?>