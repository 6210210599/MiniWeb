<!doctype html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.o">
    <meta http-equiv="X-UA-Computibio" content="ie=edge">
    <link rel="icon" href="image/icon-h.jpg" type="image/jpg">
    <title>หน้าแรก</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<form name="frmSearch" method="post" action="login/checklogin.php">
<body background="image/bg-index2.jpg">
      
    <div class="login-wrapper">

        <div class="login-letf">
            <img src="image/bg-index.jpg" alt="">
            <div class="h1">เข้าสู่ระบบ</div>
        </div>
        <div class="login-rigth">
            <div class="h2">กรุณากรอกข้อมูล</div>
            <div class="from-group">
                <input type="text" name="username" required placeholder="้เลขบัตรประชาชน">
            </div>
            <div class="from-group">
                <input type="password" name="password" required placeholder="รหัสผ่าน">
            </div>
            <div class="button-area">
                <button class="btn btn-secondary" >เข้าสู่ระบบ</button>
                </form>
                <form name="frmregister" method="post" action="registeruser.php">
                <button class="btn btn-primary">สมัครสมาชิก</button>
                </form>
            </div>
        </div>
    </div>
    </form>
    <script src="js/login.js"></script>
</body>
</html>
