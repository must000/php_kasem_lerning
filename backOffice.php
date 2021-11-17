session_start();
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" width="100%">
        <tr >
            <td width="200">
                <h2>Menu</h2>
                <ul>
                    <li><a href="backOffice.php?page=user">จัดการผู้ใช้</a></li>
                    <li><a href="backOffice.php?page=category">จัดการหมวดสินค้า</li>
                    <li><a href="backOffice.php?page=product">จัดการสินค้า</li>
                </ul>
            </td>
            <td>
                <?php
                 $link = mysqli_connect("localhost", "mmmm", "", "myshop")
                 or die("Connest Failed! -> " . mysqli_error($link));
             mysqli_query($link, "SET NAMES UTF8" or die(mysqli_error($link)));
                if ($_GET['page']=='user') {
                    $sql = "SELECT * FROM account ORDER BY role";
                    $result = mysqli_query($link,$sql) or die(mysqli_error($link));
                    ?>
                    <table width="100%" border="1">
                        <tr>
                        <th>ชื่อ - นามสกุล</th>
                        <th>รูปโปรไฟล์</th>
                        <th>Username</th>
                        <th>Role</th>
                        </tr>
                    </table>
                    <?php
                }
                elseif ($_GET['page']=='category') {
                    
                }
                elseif ($_GET['page']=='product') {
                    
                }
                
                ?>
            </td>
        </tr>
    </table>
</body>
</html>