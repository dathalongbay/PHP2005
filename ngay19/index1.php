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
    $height = "";
    $weight = "";

    if (isset($_POST) && count($_POST)) {
        // $_POST có tồn tại và có dữ liệu
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        // cú pháp if else thu nhỏ
        $height = isset($_POST["height"]) ? $_POST["height"] : 0;
        $weight = isset($_POST["weight"]) ? $_POST["weight"] : 0;

        echo "<br> cân nặng : " . $weight;
        echo "<br> chiều cao : " . $height;

        if ($weight > 0 && $height > 0) {
            $height_m = $height/100;

            $bmi = $weight/($height_m*$height_m);
            echo "<br> bmi : " . $bmi;
        }
    }
    ?>

    <pre>
        Xây dựng 1 ứng dụng form tính chỉ số BMI tương tự như trang
        https://medlatec.vn/bmi-online
        Không cần giống giao diện CSS

        bmi = can nang/ chieu cao * chieu cao ;
        chieu cao tính bằng mét
        cân năng tính bằng kg

        cú pháp if else thu nhỏ :
        (mệnh đề) ? A : B;
        nếu mệnh đề là true thì thực hiện A
        nếu mệnh đề là false thì thực hiện B
    </pre>

    <form name="bmi" method="post" action="">
        <div>
            <label>Nhập chiều cao của bạn: ( đơn vị cm )</label>
            <input type="text" name="height" value="<?php echo $height ?>">
        </div>
        <div>
            <label>Nhập cân nặng của bạn: ( đơn vị kg )</label>
            <input type="text" name="weight" value="<?php echo $weight ?>">
        </div>
        <div>
            <input type="submit" name="submit" value="Tinh BMI">
        </div>
    </form>

    <h1>Kết quả BMI của bạn : <?php echo isset($bmi) ? $bmi : ""; ?></h1>

</body>
</html>