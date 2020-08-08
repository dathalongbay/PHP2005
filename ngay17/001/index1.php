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
        mảng kết hợp là mảng có ít nhất 1 key của nó là 1 chuỗi
    </pre>
    <?php
    $cities = [];
    // gắn các phần tử vào mảng này
    $cities["hn"] = "Hà nội";
    $cities["hcm"] = "Hồ chí minh";
    $cities["dn"] = "Đà nẵng";
    $cities["hp"] = "Hải phòng";

    echo "<pre>";
    print_r($cities);
    echo "</pre>";
    ?>

    <select name="cities">
        <option value="hn">Hà nội</option>
        <option value="hcm">Hồ chí minh</option>
    </select>

    <p>Dùng vòng lặp foreach in ra 1 thẻ select với các thẻ option
    từ $cities</p>

</body>
</html>