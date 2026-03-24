<?php
session_start();

if(isset($_POST['btnLogin'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Kiểm tra hợp lệ (ví dụ đơn giản)
    if($username != "" && $email != "" && $password != ""){
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
        </head>
        <body>
            <h2>TRANG XỬ LÝ THÔNG TIN ĐĂNG NHẬP</h2>
            <p>Thông tin đăng nhập hợp lệ</p>
            <a href="mainpage.php">
                <button>Trang chính</button>
            </a>
        </body>
        </html>
<?php
    } else {
        echo "Thông tin không hợp lệ!";
    }
}
?>