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
        Các kiểu dữ liệu của biến trong PHP ?
    </pre>

    <?php
    // kiểu số
    $a = 5;
    // kiểu số thực
    $b = 5.1;
    // kiểu chuỗi
    $c = "hà nội";
    // kiểu boolean
    $d = true;
    $e = false;
    // kiểu null
    $f = null;
    // kiểu mảng là kiểu chứa được giá trị trong 1 biến
    $cities = ["hà nội", "hồ chí minh", "đà nẵng"];

    // kiểu đối tượng

    // chú ý không thể echo được mảng
    echo "<br> a : " . $a;

    // in ra 1 mảng sử dụng hàm print_r
    echo "<pre>";
    print_r($cities);
    echo "</pre>";

    // dùng hàm để xem kiểu dữ liệu và giá trị của biến
    // hàm var_dump()
    echo "<br>";
    var_dump($a);

    echo "<br>";
    var_dump($b);

    echo "<br>";
    var_dump($c);

    echo "<br>";
    var_dump($d);

    echo "<br>";
    var_dump($f);

    echo "<br>";
    var_dump($cities);
    ?>

</body>
</html>