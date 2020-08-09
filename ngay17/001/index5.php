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
    $a = [3,5,6,9,12,24,13,45];
    // in ra tổng số phần tử của mảng
    // sử dụng hàm count() để đếm phần tử của mảng
    echo "<br> đếm : " . count($a);

    echo "<pre>";
    print_r($a);
    echo "</pre>";

    $count = count($a);
    $sum = 0;
    $avg = 0;
    for($i = 0; $i < $count; $i++) {
        $sum += $a[$i];
    }

    $avg = $sum/$count;
    echo "<br> tổng : " . $sum;
    echo "<br> trung bình cộng : " . $avg;
    ?>

    <pre>
        1. In ra tổng các giá trị của các phần tử trong mảng
        2. In ra trung bình cộng của các phần tử
    </pre>

</body>
</html>