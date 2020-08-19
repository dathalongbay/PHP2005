<?php
session_start();
// thay đổi giá trị của 1 session đã tồn tại
// đơn giản gán lại giá trị cho session

// gán lại giá trị
$_SESSION["user"] = "super user";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// hủy 1 session
// dùng hàm unset()

// hủy session
unset($_SESSION["user_email"]);
echo "<pre>";
print_r($_SESSION);
echo "</pre>";