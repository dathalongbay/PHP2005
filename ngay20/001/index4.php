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
        Chuyển 1 mảng thành 1 chuỗi và ngược lại
        implode()
        explode()
    </pre>

    <?php
    $cities3 = [];

    // gán các phần tử vào mảng
    // gán key 1 cách chủ động
    $cities3["hn"] = "hà nội";
    $cities3["dn"] = "đà nẵng";
    $cities3["hcm"] = "hồ chí minh";

    echo "<pre>";
    print_r($cities3);
    echo "</pre>";

    // implode chuyển 1 mảng thành 1 chuỗi
    // tham số 1 là ký tự phân tách
    echo "<br>" . implode(" - ", $cities3);
    $str1 = implode(" * ", $cities3);
    echo "<br>" . $str1;


    // explode chuyển 1 chuỗi thành 1 mảng
    $arrRevert = explode(" * ", $str1);
    echo "<pre>";
    print_r($arrRevert);
    echo "</pre>";
    ?>

</body>
</html>