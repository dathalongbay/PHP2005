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
        Mảng chỉ số là mảng có key là các chỉ số
    </pre>

    <?php
    $students = ["nguyễn văn an", "nguyên văn b", "nguyễn văn c"];
    // dạng mảng chỉ số

    // in ra cấu trúc của mảng
    echo "<pre>";
    print_r($students);
    echo "</pre>";

    // in ra các phần tử của mảng bằng việc truy xuất vào các key của mảng
    ?>

    <ul>
        <li><?php echo $students[0] ?></li>
        <li><?php echo $students[1] ?></li>
        <li><?php echo $students[2] ?></li>
    </ul>

    <h1>Sử dụng lệnh vòng lặp foreach để duyệt mảng</h1>

    <ul>
        <?php
        foreach($students as $key => $value) {
            echo "<li>Key : $key Value : $value</li>";
        }
        ?>
    </ul>

</body>
</html>