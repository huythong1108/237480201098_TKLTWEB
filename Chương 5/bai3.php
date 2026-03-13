<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 3;
        $y = 5;
        echo "a, <br>";
        echo "x = $x , y = $y <br>";

        echo "Cộng: " . ($x + $y) . "<br>";
        echo "Trừ: " . ($x - $y) . "<br>";
        echo "Nhân: " . ($x * $y) . "<br>";
        echo "Chia: " . ($x / $y) . "<br>";
        echo "Mod: " . ($x % $y) . "<br>";
        
        echo "b, <br>";
        $x = rand(1,10);
        $y = rand(1,10);

        echo "x = $x , y = $y <br>";

        echo "Cộng: " . ($x + $y) . "<br>";
        echo "Trừ: " . ($x - $y) . "<br>";
        echo "Nhân: " . ($x * $y) . "<br>";
        echo "Chia: " . ($x / $y) . "<br>";
        echo "Mod: " . ($x % $y) . "<br>";

        echo "c, <br>";
        do {
            $x = rand(1,10);
            $y = rand(1,10);
        } while ($x <= $y);

        echo "x = $x , y = $y <br>";

        echo "Cộng: " . ($x + $y) . "<br>";
        echo "Trừ: " . ($x - $y) . "<br>";
        echo "Nhân: " . ($x * $y) . "<br>";
        echo "Chia: " . ($x / $y) . "<br>";
        echo "Mod: " . ($x % $y) . "<br>";
    ?>
</body>
</html>