<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Bảng cửu chương</h3>

    <table border="1" cellpadding="10">

    <?php
    for($i = 1; $i <= 10; $i++){
        echo "<tr>";

        for($j = 1; $j <= 10; $j++){
            echo "<td>";
            echo "$j x $i = ".($j*$i);
            echo "</td>";
        }

        echo "</tr>";
    }
    ?>

</table>
</body>
</html>