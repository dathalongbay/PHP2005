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
    $a = [9,1,4,2,5,2,100,20,30,11,15,12];

    echo "<pre>";
    print_r($a);
    echo "</pre>";

    $count = count($a);
    $max = $a[0];
    $min = $a[0];
    for($i = 0; $i < $count; $i++) {
        if ($a[$i] > $max) {
            $max = $a[$i];
        }


        if ($a[$i] < $min) {
            $min = $a[$i];
        }
    }

    echo "<br> min : " . $min;
    echo "<br> max : " . $max;

    ?>
    <pre>
        1 - Cho mảng trên hãy tìm ra giá trị nhỏ nhất trong mảng
        2 - Cho mảng trên hãy tìm ra giá trị lớn nhất trong mảng
    </pre>

</body>
</html>