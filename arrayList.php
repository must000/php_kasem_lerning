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
    <h3>Numeric Array</h3>
    <?php
    $car = array("click", "wave", "fino");
    print $car[0] . $car[1] . $car[2];
    ?>
    <h3>Associative Array</h3>
    <?php
    $student = array("name" => "jeeraphat", "group" => "D4", "score" => "100");
    print $student["name"];
    $student["name"] = "jitti";
    print "<br>" . $student["name"];
    ?>
    <h3>Array แบบผสม</h3>
    <?php
    $arrr = array('a' => "green", "red", "b" => "green", "blue", "black");
    print_r($arrr)
    ?>
    <h3>Multidimensional Arrays</h3>
    <?php
    $member = array('55001' => array('name' => 'อภิชาติ', 'group' => 'D2', 'score' => "85"), '55002' => array('name' => 'เทิดศักดิ์', 'group' => 'D2', 'score' => "79"), '55003' => array('name' => 'พลเทพ', 'group' => 'D2', 'score' => "99"));
    print $member['55003']['name'];
    ?>
    <h3>foreach</h3>
    <?php
    foreach ($student as $index => $value) {
        print $index . ':' . $value . '<br/>';
    } ?>

    <b>หาจำนวนเลขคู่และจำนวนเลขคี่</b>
    <br>
    <?php
    //การบ้าน
    $a = array(5, 4, 10, 15, 11, 18, 20, 14, 9, 16, 42, 35, 66, 88, 19);
    $kee = 0;
    $kuu = 0;
    foreach ($a as $index => $value) {
        if ($value % 2 == 0) {
            $kuu++;
        } else {
            $kee++;
        }
    }
    print "เลขคู่ = " . $kuu . "เลขคี่ = " . $kee;
    ?>
    <?php
    $country = array('CH' => 'China', 'JP' => 'Japan', 'TH' => 'Thailand', 'USA' => 'America', 'Other' => 'Other Country');
    ?>
    <br>
    <select name="country" id="">
        <option value="">--เลือกประเทศ--</option>
        <?php
        foreach ($country as $index => $val) {
        ?>
            <option value="<?= $index ?>"><?= $val ?></option>
        <?php
        }
        ?>
    </select>
    <br>
    <h4>array to string</h4>
    <?php
    $abc = array('A' => 'Ant', 'B' => 'Bird', 'C' => 'Cat');
    $str = implode(',', $abc);
    echo $str;
    ?>
    <h4>string to array</h4>
    <?php
    $str2 = 'sinovac,az,Johnson';
    $arr2 = explode(',', $str2);
    print_r($arr2)
    ?>
    <h4>array_serch</h4>
    <?php
    $number = array(5, 6, 4, 6, 7, 2, 5, 5, 5, 5, 5, 9, 5);
    $key = array_search(5, $number);
    if ($key === false) {
        print 'ไม่พบ';
    } else print $key . "<br>";
    $key2 = array_search_ALL(5, $number);
    //การบ้าน
    function array_search_ALL($key, $arr)
    {
        $count = count($arr);
        $str = "";
        foreach($arr as $i) {
            $x = array_search($key, $arr);
            if ($x === false) {
            } else {
                if ($i == 0) {
                    $str = $x;
                    unset($arr[$x]);
                } else {
                    $str = $str . "," . $x;
                    unset($arr[$x]);
                }
            }
        }
        $y = explode(',', $str);
        print_r($y);
    }
    ?>
</body>

</html>