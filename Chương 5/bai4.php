<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $kq = "";

    if(isset($_POST['cong'])) // kiểm tra biến có tồn tại không
        $kq = $_POST['a'] + $_POST['b']; // $_POST lấy dữ liệu trong ô a và ô b 
                                         // a và b là name của text trong form
    if(isset($_POST['tru']))
        $kq = $_POST['a'] - $_POST['b'];

    if(isset($_POST['nhan']))
        $kq = $_POST['a'] * $_POST['b'];

    if(isset($_POST['chia']))
        $kq = $_POST['a'] / $_POST['b'];

    if(isset($_POST['mod']))
        $kq = $_POST['a'] % $_POST['b'];
    ?>

    <form method="post">j
    <h2>TÍNH TOÁN SỐ HỌC</h2>

    Số thứ 1: <input type="text" name="a"><br><br>
    Số thứ 2: <input type="text" name="b"><br><br>

    Kết quả: <input type="text" value="<?php echo $kq; ?>"><br><br>

    <input type="submit" name="cong" value="Cộng">
    <input type="submit" name="tru" value="Trừ">
    <input type="submit" name="nhan" value="Nhân">
    <input type="submit" name="chia" value="Chia">
    <input type="submit" name="mod" value="Mod">

    </form>
</body>
</html>