<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $arr = [5,2,9,7,4,8,1];

    echo "Mảng: ";
    foreach($arr as $v){
        echo $v." ";
    }

    echo "<br>";

    echo "Số lớn nhất: ".max($arr)."<br>";
    echo "Số nhỏ nhất: ".min($arr)."<br>";

    echo "Số chính phương: ";
    foreach($arr as $v){
        if(sqrt($v)==intval(sqrt($v))){
            echo $v." ";
        }
    }

    echo "<br>";

    echo "Số chẵn: ";
    foreach($arr as $v){
        if($v%2==0) echo $v." ";
    }

    echo "<br>";

    echo "Số lẻ: ";
    foreach($arr as $v){
        if($v%2!=0) echo $v." ";
    }

    echo "<br>";

    sort($arr);

    echo "Mảng tăng dần: ";
    foreach($arr as $v){
        echo $v." ";
    }

    ?>
</body>
</html>