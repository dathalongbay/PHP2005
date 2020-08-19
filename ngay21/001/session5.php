<?php
session_start();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// hủy tất cả các session đang tồn tại
session_unset();
session_destroy();

echo "<pre>";
print_r($_SESSION);
echo "</pre>";