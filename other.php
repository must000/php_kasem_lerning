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
    <?php 
    function xxx(){
        static $i;
        $i++;
        print($i);
    }
    xxx();
    xxx();
    xxx();

    print "<br>";

    function zzz($x,$y,&$z){
        global $x,$y;
    }
    $z = 0;
    zzz(5,3,$result);
    print $result;;
    

    function addNumbers($x,$y){
        //print $x+$y+$c;
        //มีError แต่ยังรัน
    }

    @addNumbers(5,8);
    ?>
    
</body>
</html>