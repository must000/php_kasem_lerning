<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="calculator.php" method="post">
        <input type="text" name="input1" id="input1" size="S">
        <select name="operator" id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
            <input type="text" name="input2" id="input2" size="5">
            <button type="submmit">คำนวณ</button>
        </select>
    </form>
    <?php
    if (isset($_POST['input1']) && (isset($_POST['input2']))) {
        $a = $_POST['input1'];
        $b = $_POST['input2'];
        if ($_POST['operator'] == '+') {
            print $a . '+' . $b . '=' . ($a + $b);
        } else if ($_POST['operator'] == '-') {
            print $a . '-' . $b . '=' . ($a - $b);
        } else if ($_POST['operator'] == '*') {
            print $a . '*' . $b . '=' . ($a * $b);
        } else if ($_POST['operator'] == '/') {
            print $a . '/' . $b . '=' . ($a / $b);
        } else if ($_POST['operator'] == '%') {
            print $a . '%' . $b . '=' . ($a % $b);
        }
    }
    ?>
</body>
</html>