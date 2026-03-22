<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $matrix = [
    [1.1,2.3,3.1,4.0,5.0],
    [6.2,7.7,8.8,9.5,1.2],
    [4.6,1.9,3.6,8.9,1.5],
    [1.6,1.7,1.8,1.9,2.0]
    ];

    $max = $matrix[0][0];
    $min = $matrix[0][0];
    $sum = 0;

    echo "<table border='1'>";

    for($i=0;$i<count($matrix);$i++){
        echo "<tr>";
        
        for($j=0;$j<count($matrix[$i]);$j++){
            
            $v = $matrix[$i][$j];
            
            if($v>$max) $max=$v;
            if($v<$min) $min=$v;
            
            $sum += $v;
            
            echo "<td>$v</td>";
        }
        
        echo "</tr>";
    }

    echo "</table>";

    echo "<br>Max: $max";
    echo "<br>Min: $min";
    echo "<br>Tổng: $sum";

    ?>    
</body>
</html>