<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="20">

    <?php
    for($i=0;$i<8;$i++){
        echo "<tr>";

        for($j=0;$j<8;$j++){
            if(($i+$j)%2==0)
                echo "<td bgcolor='white'></td>";
            else
                echo "<td bgcolor='black'></td>";
        }

        echo "</tr>";
    }
    ?>

</table>
</body>
</html>