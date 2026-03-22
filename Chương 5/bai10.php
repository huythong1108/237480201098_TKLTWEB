<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Nhập các số (cách nhau dấu phẩy): <br>
    <input type="text" name="array">
    <input type="submit" value="Xử lý">
    </form>

    <?php
    if(isset($_POST['array'])){

    $arr = explode(",", $_POST['array']);

    echo "<h3>Mảng:</h3>";
    foreach($arr as $v){
        echo $v." ";
    }

    $demchan = 0;
    $tongle = 0;

    foreach($arr as $v){
        if($v % 2 == 0){
            $demchan++;
        } else {
            $tongle += $v;
        }
    }

    echo "<br> Số lượng số chẵn: $demchan";
    echo "<br> Tổng số lẻ: $tongle";

    echo "<br> Max: ".max($arr);
    echo "<br> Min: ".min($arr);

    $dao = array_reverse($arr);

    echo "<br> Mảng đảo ngược: ";
    foreach($dao as $v){
        echo $v." ";
    }

    }
    ?>

</body>
</html>