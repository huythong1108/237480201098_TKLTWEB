<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $s = "tôi ăn cơm";
    $a = explode(" ", $s);
    for($i = 0; $i < count($a); $i++){
        echo "a[".($i+1)."] = ".$a[$i]."<br>";
    }
    ?>
</body>
</html>