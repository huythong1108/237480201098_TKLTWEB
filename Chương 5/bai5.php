<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function uscln($a,$b){
        while($b != 0){
            $r = $a % $b;
            $a = $b;
            $b = $r;
        }
        return $a;
    }

    $kq="";

    if(isset($_POST['uscln'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $kq = uscln($a,$b);
    }

    if(isset($_POST['bscnn'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $u = uscln($a,$b);
        $kq = ($a*$b)/$u;
    }

    ?>

    <form method="post">

    <h2>TÍNH USCLN VÀ BSCNN</h2>

    Số thứ 1: <input type="text" name="a"><br><br>
    Số thứ 2: <input type="text" name="b"><br><br>

    Kết quả: <input type="text" value="<?php echo $kq; ?>"><br><br>

    <input type="submit" name="uscln" value="USCLN">
    <input type="submit" name="bscnn" value="BSCNN">

    </form>
</body>
</html>