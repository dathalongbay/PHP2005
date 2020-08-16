<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <pre>
        $_GET trong PHP
        lấy những tham số trên url xuống từ query string
        query string là chuỗi đằng sau dấu ? trên url

        index8.php?controller=post&action=edit&id=5&return=0
        query string chính là : ?controller=post&action=edit&id=5&return=0
        khi có tham số trong QS nối các tham số bằng dấu &
    </pre>

    <?php

    // $_GET là 1 mảng kết hợp
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    echo "<br> controller : " . $_GET["controller"];
    echo "<br> action : " . $_GET["action"];
    ?>

</body>
</html>