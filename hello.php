<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: gray;
        }
    </style>
</head>

<body>
    <h2>hello php</h2>
    <a href="form.html">form.html </a>
    <br>
    <a href="calculator.php">เครื่องคิดเลข</a>
    <br>
    <a href="other.php">other</a>
    <br>
    <a href="arrayList.php">Array</a>
    <br>
    <a href="exam_array.php">การบ้าน 3 ข้อ</a>
    <br><br><br>
    <strong>ย่อหน้าที่ <?php print "2" ?></strong><br>
    <?php
    print "<i>ย่อหน้า ....";
    for ($i = 0; $i < 10; $i++) {
        print "หน้า $i <br>";
    }
    $a = 10;
    $b = "5";
    $c = "3hello5";
    print "<br>";
    print $a + $b; //ได้15 
    print "<br>";
    print $a . $b; //ได้105 " . " คือการนำข้อความมาต่อกัน
    //print $a+$c; //มีเตือน error

    //ยกเลิกตัวแปร
    $i = "Hello";
    unset($i);
    //print $i;

    print "<br>";

    $name = "สมชาย";
    $age = 30;
    print "ชื่อ $name อายุ $age <br>";
    print 'ชื่อ $name อายุ $age <br>';

    //เครื่องหมายพิเศษที่ไม่สามารถเขียนได้ ( \ )
    print("ผมชื่อ \" must \"อายุ 20 ปี <br>");
    print("ผมชื่อ 'must'อายุ 20 ปี");

    ?>

    <strong>fsdfsdfs</strong>
    <?php
    $a = 14;
    $c = 2;
    print --$a + $c++;
    ?>
    <br>
    

</body>

</html>