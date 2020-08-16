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
        hàm unset() hủy 1 phần tử trong mảng dựa vào key
    </pre>

    <?php
    $cities3 = [];

    // gán các phần tử vào mảng
    // gán key 1 cách chủ động
    $cities3["hn"] = "hà nội";
    $cities3["dn"] = "đà nẵng";
    $cities3["hcm"] = "hồ chí minh";

    echo "cities3 <pre>";
    print_r($cities3);
    echo "</pre>";

    // hủy 1 phần tử trong mảng theo key
    unset($cities3["dn"]);

    echo "cities3 <pre>";
    print_r($cities3);
    echo "</pre>";
    ?>

</body>
</html>