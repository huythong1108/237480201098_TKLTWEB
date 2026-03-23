<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
    <select name="year">

    <?php
    $namhientai = date("Y");

    for($y = 1900; $y <= $namhientai; $y++){
        echo "<option>$y</option>";
    }
    ?>

    </select>
    </form>
</body>
</html>