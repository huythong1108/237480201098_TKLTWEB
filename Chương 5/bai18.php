<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $s = "TRUONG DAI HOC BAC LIEU";

    $a = explode(" ", $s);
    $max = "";
    $length = 0;

    foreach($a as $word){
        if(strlen($word) > $length){
            $length = strlen($word);
            $max = $word;
        }
    }
    echo "Từ dài nhất là: ".$max."<br>";
    echo "Số ký tự: ".$length;
    ?>
</body>
</html>