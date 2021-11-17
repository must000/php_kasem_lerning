<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บันทึกข้อมูล</title>
</head>

<body>
    <?php
    print '<pre>';
    print_r($_POST);
    print_r($_FILES);
    print '<pre>';
    if ($_POST['password1'] != $_POST['password2']) {
        print "<h2> มึงใส่ไม่เหมือนกัน";
    } else {
        $link = mysqli_connect("localhost", "mmmm", "", "myshop")
            or die("Connest Failed! -> " . mysqli_error($link));
        mysqli_query($link, "SET NAMES UTF8" or die(mysqli_error($link)));

        $sql = "INSERT INTO account SET 
        pre ='" . $_POST['pre'] . "',
        fullname ='" . $_POST['fullname'] . "',
        address ='" . $_POST['address'] . "',
        have_credit ='" . $_POST['have_credit'] . "',
        interest ='" . implode(',', $_POST['interest']) . "',
        username='" . $_POST['username'] . "',
        password='" . $_POST['password1'] . "'";

        if (mysqli_query($link, $sql)) {
            $user_id = mysqli_insert_id($link);
            if (move_uploaded_file($_FILES["profile"]["tmp_name"], "profile_img/" . $_FILES["profile"]["name"])) {
                    $sql = "UPDATE account SET
                    profile = '".$_FILES["profile"]["name"]."'
                    WHERE user_id = '".$user_id."'LIMIT 1";
                    mysqli_query($link,$sql) or die("Update Failed!->".mysqli_error($link));
                    print "<h2>สมัครสมาชิกสำเร็จแล้ว</h2>
                    <a href='login.php'>กลับไปหน้า Login</a>";
            }
        }
        else {
            print mysqli_error($link);
        }
    }


    ?>
</body>

</html>