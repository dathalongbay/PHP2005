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
        khai báo mảng kết hợp
    </pre>

    <?php
    // khai báo mảng cách 1
    $cities = array("hn" => "hà nội", "dn" => "đà nẵng", "hcm" => "hồ chí minh");

    echo "biến cities<pre>";
    print_r($cities);
    echo "</pre>";

    // khai báo mảng cách 2
    $cities1 = ["hn" => "hà nội", "dn" => "đà nẵng", "hcm" => "hồ chí minh"];

    echo "cities1 <pre>";
    print_r($cities1);
    echo "</pre>";

    $cities3 = [];

    // gán các phần tử vào mảng
    // gán key 1 cách chủ động
    $cities2["hn"] = "hà nội";
    $cities2["dn"] = "đà nẵng";
    $cities2["hcm"] = "hồ chí minh";

    echo "cities3 <pre>";
    print_r($cities3);
    echo "</pre>";
    ?>
</body>
</html>