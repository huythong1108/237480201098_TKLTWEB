<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Nhập chuỗi: <input type="text" name="s"><br><br>
    Nhập ký tự cần đếm: <input type="text" name="ch"><br><br>
    <input type="submit" value="Đếm">
    </form>

    <?php
    if(isset($_POST['s'])){
        $s = $_POST['s'];
        $ch = $_POST['ch'];

        $count = substr_count($s,$ch);

        echo "Số lần xuất hiện: ".$count;
    }
    ?>    
</body>
</html>