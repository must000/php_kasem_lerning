<?php
session_start();

if (!isset($_SESSION['authen'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>หน้าหลัก</h1>
    ยินดีต้อนรับ <?=$_SESSION['pre'].$_SESSION['fullname']?>
    <br>
    
    <img src="profile_img/<?=$_SESSION['profile_img']?>" alt="" width="300px">
    <br>
    <a href="logout.php">logout</a>
    
</body>
</html>