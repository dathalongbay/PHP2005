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
        isset() kiểm tra biến hoặc 1 phần tư trong mảng có tồn tại hay không
        empty() kiểm tra 1 biến hoặc 1 mảng có rỗng
        rỗng trả về true
        không rỗng trả về false
        !empty() kiểm trả 1 mảng có dữ liệu hay không
        rỗng thì trả false
        không rỗng ( có dữ liệu ) trả về true
    </pre>

    <?php
    $cities3 = [];

    // gán các phần tử vào mảng
    // gán key 1 cách chủ động
    $cities3["hn"] = "hà nội";
    $cities3["dn"] = "đà nẵng";
    $cities3["hcm"] = "hồ chí minh";

  var_dump(!empty($cities3));
    ?>
</body>
</html>