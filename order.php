<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    echo "Tên đăng nhập: " . $username . "<br>";
    echo "Mật khẩu: " . $password . "<br>";
}
?>
