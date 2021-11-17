<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>สมัครสมาชิก</h3>
    <form action="do_register.php" method="post" enctype="multipart/form-data">
        <h4>
            ข้อมูลส่วนบุคคล
        </h4>
        <div class="gorm-group">
            <label for="pre">คำนำหน้า</label>
            <select name="pre" id="pre">
                <option value="นาย">นาย</option>
                <option value="นาง">นาง</option>
                <option value="นางสาว">นางสาว</option>
            </select>
        </div>
        <div class="gorm-group">
            <label for="fullname">ชื่อ-นามสกุล</label>
            <input type="text" name="fullname" id="fullname" required>
        </div>
        <div class="form-group">
            <label for="address">ที่อยู่</label>
            <textarea name="address" id="address" cols="30" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="have_credit">มีบัตรเครดิตหรือไม่</label>
            <input type="radio" name="have_credit" id="have_credit" value="yes">
            <input type="radio" name="have_credit" id="no_credit" value="no">
        </div>
        <div class="form-group">
            <label for="interest">สินค้าที่สนใจ</label>
            <input type="checkbox" name="interest[]" id="cloth" value="cloth"> เสื้อผ้า
            <input type="checkbox" name="interest[]" id="bag" value="bag"> กระเป๋า
            <input type="checkbox" name="interest[]" id="shoe" value="shoe"> รองเท้า
        </div>
        <div class="form-group">
            <label for="profile">รูปโปรไฟล์</label>
            <input type="file" name="profile" id="profile">
        </div>
        <h3>ข้อมูลการเข้าสู่ระบบ</h3>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" id="username">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" name="password1" id="password1">
        </div>
        <div class="form-group">
            <label>Re Password</label>
            <input type="text" name="password2" id="password2">
        </div>
        <button type="submit"><strong> บันทึก</strong></button>
    </form>
</body>

</html>