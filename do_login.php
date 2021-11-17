<?php
session_start();
$link = mysqli_connect("localhost", "mmmm", "", "myshop")
    or die("Connest Failed! -> " . mysqli_error($link));

$sql = "SELECT * FROM account
WHERE username='" . $_POST['user'] . "' 
AND password ='" . $_POST['password'] . "'
";
$result = mysqli_query($link, $sql) or  die(mysqli_error($link));
if (mysqli_num_rows($result) == 0) {
    print "<h2>Wrong Username or Password!</h2> <a href='login.php'>กลับไปหน้า Login</a>";
}
else{
    $row = mysqli_fetch_assoc($result);
    $_SESSION['authen'] = true;
    $_SESSION['username'] = $row['username'];
    $_SESSION['pre'] = $row['pre'];
    $_SESSION['fullname'] = $row['fullname'];
    $_SESSION['profile_img'] = $row['profile'];
    header("location:index.php");
}
