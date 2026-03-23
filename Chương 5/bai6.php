<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Bảng n và n²</h3>

    <table border="1">
    <tr>
        <th>Số n</th>
        <th>Số n²</th>
    </tr>

    <?php
    for($n = 0; $n <= 50; $n++){
        echo "<tr>";
        echo "<td>$n</td>";
        echo "<td>".($n*$n)."</td>";
        echo "</tr>";
    }
    ?>

    </table>
</body>
</html>