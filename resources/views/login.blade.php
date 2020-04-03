<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginpage</title>
    <link rel="stylesheet" href="css/master.css">
    <script src="js/chacknull.js"></script>
  
    </style>
</head>
<body>
<div class="header">
        <h2>เข้าสู่ระบบ</h2>
    </div>

    <form action="home" method="GET" onsubmit="return checknull();">
        <div class="input-group">
            <label for="username">ชื่อผู้ใช้</label>
            <input type="text" name="username" id="user-input" class="username-input" placeholder="กรอกชื่อผู้ใช้">
        </div>
        <div class="input-group">
            <label for="ืpassword">รหัสผ่าน</label>
            <input type="password" name="password" id="passuser-input" class="passworduser-input" placeholder="กรอกรหัสผ่าน">
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" class="btn">เข้าสู่ระบบ</button>
        </div>
        <p>คุณยังไม่ได้เป็นสมชิกใช่ไหม? <a href="register" class="btn_next">สมัครสมาชิก</a></p>
    </form>
</body>
</html>