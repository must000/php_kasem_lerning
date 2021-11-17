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
    <!-- ข้อ 1 -->
    <?php
    $arr1 = array("A", "F", "D", "C", "H");
    $x = array();
    foreach ($arr1 as $index => $value) {
        $x += array($value => $index);
    }
    // $x = array("A"=>0,"F"=>1);
    $arr1 = $x;
    print_r($arr1);
    ?>
    <br>
    <!-- ข้อ 2 -->
    <?php
    $arr2 = array("A", "B", "C", "D");
    $arr3 = array("W", "X", "Y", "Z");
    $y = array();
    foreach ($arr2 as $index => $value) {
        array_push($y, $value);
        array_push($y, $arr3[$index]);
    }
    print_r($y)
    ?>
    <br>
    <!-- ข้อ 3 -->
    <?php
    $arr4 = array("A", "C", "B", "A", "C", "B", "A", "G", "A", "G", "F", "E");
    $z = array();
    foreach ($arr4 as $index => $value) {
        $count = 0;
        do {
            $dd = array_search($value, $arr4);
            if ($dd === false) {
            } else {
                $count++;
                unset($arr4[$dd]);
            }
        } while ($dd !== false);
        $z += array($value => $count);
    }
    print_r($arr4);
    ksort($z);
    print_r($z);
    ?>
    <br>
    <!-- แบบทดสอบ -->
    <a href="https://www.facebook.com/">Go To Facebook</a>
    <br>
    <img src="myPhoto.jpg" width="200px" height="100px">
    <br>
    <b><i><u>Hello Eorld</u></i></b>
    <br>
    <r>CH<sub>4</sub>O<sub>2</sub></r>
    <br>
    <table border="1" width="150px">
        <tr>
            <th colspan="2">ห้อง ป.1/4</th>
        </tr>
        <tr>
            <td><b>รหัส</b></td>
            <td><b>ชื่อนามสกุล</b></td>
        </tr>
        <tr>
            <td>55001</td>
            <td>ปิติ</td>
        </tr>
        <tr>
            <td>
                55002
            </td>
            <td>มานี</td>
        </tr>

    </table>

    <hr>

    <div border-style:solid>
        <form action="">
            <label for="">ชื่อหนังสือ</label>
            <input type="text" size="10" reguired>
            <br>
            <label for="">ผู้แต่ง</label>
            <input type="text" size="10" reguired>
            <br>
            <label for="">หมวดหนังสือ</label>
            <select>
                <optgroup label="หมวดหนังสือ">
                    <option>นิยาย</option>
                    <option>ท่องเที่ยว</option>
                    <option>ความรู้รอบตัว</option>
                </optgroup>
            </select>
            <br>
            <label for="">เนื้อเรื่องย่อ</label>
            <textarea cols="15" rows="3" placeholder="ระบุเนื้อเรื่องย่อ"></textarea>
            <br>
            <label for="">ภาษา</label>
            <input type="radio">ภาษาไทย
            <input type="radio">ภาษาอังกฤษ
            <br>
            <label for="">วางขายที่</label>
            <input type="checkbox">SE-ED
            <input type="checkbox">นายอินทร์
            <input type="checkbox">B2S
            <br>
            <label>ภาพหน้าปก</label>
            <input type="file" accept="image/png, image/jpeg">
            <br>
            <input type="submit" value="บันทึกข้อมูล">
        </form>
    </div>

  
</body>

</html>