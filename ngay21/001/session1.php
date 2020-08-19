<?php
// khởi động session trong php bắt buộc
session_start();


// $_SESSION là mảng kết hợp và nó hoạt động mọi nơi trong ứng dụng php
// tạo ra 2 session
$_SESSION["user"] = "admin";
$_SESSION["user_email"] = "admin123@gmail.com";

// in ra giá trị của session
echo "<br> user là : " . $_SESSION["user"];

// debug session
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";




