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

    <?php
    // khai báo mảng cách 1
    $cities = array("hà nội", "đà nẵng", "hồ chí minh");

    echo "biến cities<pre>";
    print_r($cities);
    echo "</pre>";

    // khai báo mảng cách 2
    $cities1 = ["hà nội", "đà nẵng", "hồ chí minh"];

    echo "cities1 <pre>";
    print_r($cities1);
    echo "</pre>";

    // khai báo mảng số 3

    $cities2 = [];

    // gán các phần tử vào trong mảng $cities2
    // tư gán key cho mảng chỉ số bắt đau từ 0
    $cities2[] = "hà nội";
    $cities2[] = "đà nẵng";
    $cities2[] = "hồ chí minh";

    // khai báo cách 4
    $cities3 = [];

    // gán các phần tử vào mảng
    // gán key 1 cách chủ động
    $cities2[0] = "hà nội";
    $cities2[1] = "đà nẵng";
    $cities2[2] = "hồ chí minh";

    ?>

</body>
</html>